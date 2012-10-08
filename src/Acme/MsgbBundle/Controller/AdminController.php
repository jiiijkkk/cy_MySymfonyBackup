<?php

namespace Acme\MsgbBundle\Controller;

use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\MsgbBundle\Entity\msgb;
use Acme\MsgbBundle\Form\Type\MsgbType;
use Acme\MsgbBundle\Entity\msgb_admin;
use Acme\MsgbBundle\Form\Type\Msgb_adminType;
use Acme\MsgbBundle\Entity\msgb_class;
use Acme\MsgbBundle\Form\Type\Msgb_classType;


class AdminController extends Controller
{
	public function logoutAction($page_size,$page,Request $request){
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
            $product = $this->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_admin')
                ->find($_SESSION['login']);
            //$product->setOnline(0);
            $em = $this->getDoctrine()->getEntityManager();
            $em->flush();
            unset($_SESSION['login']);

            //WRITE LOG
            msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$product->getId(),$product->getAccount(),$product->getNickname(),"","logout");
            //End of WRITE LOG
            
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size,'page' => $page)));
        }
        else
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size,'page' => $page)));
	}
	public function disaccountAction($page_size,$page,Request $request){
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
            $em = $this->getDoctrine()->getEntityManager();
            $product = $this->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_admin')
                ->find($_SESSION['login']);

            //WRITE LOG
            msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$product->getId(),$product->getAccount(),$product->getNickname(),$_SESSION['login'],"disaccount");
            //End of WRITE LOG

	        $em->remove($product);
	        $em->flush();

            unset($_SESSION['login']);

            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size,'page' => $page)));
        }
        else
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size,'page' => $page)));
	}
	public function admin_ctrlAction(Request $request){
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
            //GET THEME
            $stylesheet = msgb_functions::get_stylesheet($request);
            
            //PDO CLEAR TIMEOUT ITEM
            msgb_functions::pdo_clear();

            $em = $this->getDoctrine()->getEntityManager();
		
		    $query = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb_admin')->createQueryBuilder('p')
                ->orderBy('p.account', 'ASC')
			    ->getQuery();

            $admins = $query->getResult();

            $mysql_link = mysql_connect('localhost', 'root', 'root');
            mysql_select_db('symfony');
            $mysql_query_result = mysql_query("SELECT session_id FROM session");
            
            $online_ids = null;
            while ($row = mysql_fetch_assoc($mysql_query_result, MYSQL_ASSOC))
                $online_ids[msgb_functions::pdo_get_admin_id($row['session_id'])] = 1;
                        
            return $this->render('AcmeMsgbBundle:Default:admin_ctrl.html.twig' ,
			    array(
                    'admins' => $admins ,
                    'online_ids' => $online_ids ,
                    'admin_user' => $_SESSION['login'] ,
                    'stylesheet' => $stylesheet
                    
			    )
		    );
        }
        else
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage'));

	}
	public function admin_editAction($id,Request $request){
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
            //GET THEME
            $stylesheet = msgb_functions::get_stylesheet($request);
            
            //PDO CLEAR TIMEOUT ITEM
            msgb_functions::pdo_clear();

            $new_admin_data = new msgb_admin();
            $admin_data = $this->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_admin')
                ->find($id);
            $new_admin_data->setAccount($admin_data->getAccount());
            $new_admin_data->setNickname($admin_data->getNickname());

            $form = $this->createForm(new Msgb_adminType(),$new_admin_data);
    		if ($request->getMethod() == 'POST') {
		        $form->bindRequest($request);
                $validator = $this->get('validator');
                $errors=$validator->validate($admin_data);
			    if (count($errors)==0) {
                    $repository = $this->getDoctrine()
                        ->getRepository('AcmeMsgbBundle:msgb_admin');
                    $query = $repository->createQueryBuilder('p')
                        ->where('p.id != :id')
                        ->setParameter('id',$id)
                        ->andWhere('p.account = :account')
                        ->setParameter('account',$new_admin_data->getAccount())
                        ->getQuery();
                    $product = $query->getResult();
                    if(sizeOf($product)>0){
                        $errors[0] = new fake_error();
                        $errors[0]->setMessage("This account has already been used!");
                        return $this->render('AcmeMsgbBundle:Default:admin_edit.html.twig' ,
	                        array(
                                'this_id' => $_SESSION['login'] ,
                                'id' => $id ,
                                'form' => $form->createView() ,
                                'stylesheet' => $stylesheet ,
                                'errors' => $errors
	                        )
                        );
                    }
                    else{
			            $em = $this->getDoctrine()->getEntityManager();
                        if($id == $_SESSION['login']){
			                $product = $this->getDoctrine()
			                    ->getRepository('AcmeMsgbBundle:msgb_admin')
			                    ->find($id)
                                ->setAccount($new_admin_data->getAccount());
			                $product = $this->getDoctrine()
			                    ->getRepository('AcmeMsgbBundle:msgb_admin')
			                    ->find($id)
                                ->setPassword($new_admin_data->getPassword());
                        }
			            $product = $this->getDoctrine()
			                ->getRepository('AcmeMsgbBundle:msgb_admin')
			                ->find($id)
                            ->setNickname($new_admin_data->getNickname());
			            $em->flush();
                        return $this->redirect($this->generateUrl('AcmeMsgbBundle_admin_ctrl'));
                    }
		        }
                else{
                    return $this->render('AcmeMsgbBundle:Default:admin_edit.html.twig' ,
	                    array(
                            'this_id' => $_SESSION['login'] ,
                            'id' => $id ,
                            'form' => $form->createView() ,
                            'stylesheet' => $stylesheet ,
                            'errors' => $errors
	                    )
                    );
                }
            }
            return $this->render('AcmeMsgbBundle:Default:admin_edit.html.twig' ,
	            array(
                    'this_id' => $_SESSION['login'] ,
                    'id' => $id ,
                    'form' => $form->createView() ,
                    'stylesheet' => $stylesheet ,
                    'errors' => null
	            )
            );
        }
        else
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage'));
    }
	public function admin_deleteAction($id){
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
            //WRITE LOG
            $admin = $this->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_admin')
                ->find($_SESSION['login']);
            msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$admin->getId(),$admin->getAccount(),$admin->getNickname(),$id,"disaccount");
            //End of WRITE LOG
            
	        $product = $this->getDoctrine()
		        ->getRepository('AcmeMsgbBundle:msgb_admin')
		        ->find($id);
            $em = $this->getDoctrine()->getEntityManager();
            $em->remove($product);
	        $em->flush();


            if($_SESSION['login']==$id)
                unset($_SESSION['login']);
                
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_admin_ctrl'));
        }
        else
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage'));
    }
	public function admin_logAction(Request $request,$page_size,$page,$account){
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){

            //GET THEME
            $stylesheet = msgb_functions::get_stylesheet($request);
            
            //PDO CLEAR TIMEOUT ITEM
            msgb_functions::pdo_clear();

            $qb = $this->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_log')
                ->createQueryBuilder('p')
                ->orderBy('p.time', 'DESC');

            if($account!="")
                $qb->where('p.admin_id = ?1')
                  ->setParameter('1',$account);

            $query = $qb->getQuery();

            //THE PAGE CONTROLLER
		    $firstResult=($page-1)*$page_size;
		    $maxResult=$page_size;
            //END OF THE PAGE CONTROLLER

            //FIND NUMBER OF THE PAGE
		    $msg_num = sizeOf($query->getResult());
		    $page_num = ceil($msg_num/$page_size);
		    if($page_num ==0)$page_num++;
	        //END OF FIND NUMBER OF THE PAGE

            //QUERY THE PAGE
		    $query=$query->setFirstResult($firstResult)->setMaxResults($maxResult);
            //END OF QUERY THE PAGE

            $logs = $query->getResult();

            //GET ADMIN LIST
            $admins=null;
            $msgs=null;
            foreach($logs as $log){
                $tmp_admin = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb_admin')->createQueryBuilder('p')
		            ->where('p.id  = ?1')
		            ->setParameter('1',$log->getAdminId())
		            ->getQuery()
                    ->getResult();
                if($tmp_admin)
                    $admins[$log->getAdminId()]=$tmp_admin[0];
                if($log->getAction()=="message"||$log->getAction()=="reply"||$log->getAction()=="remove_reply"){
                    $tmp_msg = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb')->createQueryBuilder('p')
		                ->where('p.id  = ?1')
		                ->setParameter('1',$log->getTargetId())
		                ->getQuery()
                        ->getResult();
                    if($tmp_msg)
                        $msgs[$log->getTargetId()]=$tmp_msg[0];
                }
            }
            //END OF GET ADMIN LIST

            return $this->render('AcmeMsgbBundle:Default:admin_log.html.twig' ,
	            array(
                    'page_size' => $page_size ,
                    'page' => $page ,
                    'page_num' => $page_num ,
                    'logs' => $logs ,
                    'admins' => $admins ,
                    'msgs' => $msgs ,
                    'stylesheet' => $stylesheet
	            )
            );
        }
        else
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage'));
    }
    public function admin_analyzeAction(Request $request, $page_size, $page){
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
            
            //GET THEME
            $stylesheet = msgb_functions::get_stylesheet($request);
            
            //PDO CLEAR TIMEOUT ITEM
            msgb_functions::pdo_clear();
            
            //VARIABLES
            $start_datetime = null;
            $end_datetime = null;
            $start_flag = false;
            $end_flag = false;
            $action = null; /****************************
                            *   message                 *
                            *   signup                  *
                            *   login, logout, log*     *
                            *   reply                   *
                            *   remove_reply            *
                            *   remove_message          *
                            *   disaccount              *
                            ****************************/  
            $user = null;
            $class = null;
            $sort = "time_DESC";
            
            //COOKIES TO CONTANT
            $cookies = $request->cookies;
            
            //QUERY LOGS
            
            $qb = $this
                ->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_log')
                ->createQueryBuilder('p')
                ->orderBy('p.time', 'DESC');
	        
            //QUERY CLASSES
            $class_qb = $this
                ->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_class')
                ->createQueryBuilder('p')
                ->orderBy('p.start', 'ASC');
            $classes = $class_qb
                ->getQuery()
                ->getResult();
	        
	        //INITIAL DATE
	        if($cookies->has("SYMFONY2_MSGB_ANALYZE_START") && !isset($_POST['clear_date']) ){
	            $start_datetime = $cookies->get("SYMFONY2_MSGB_ANALYZE_START");
	            $start_flag = true;
	        }
	        else{
                $all_logs = $qb->getQuery()->getResult();
	            $first_datetime = $all_logs[sizeOf($all_logs)-1]->getTime();
	            $start_datetime = $first_datetime->format('j-n-Y H:i:s');
	        }
	        if($cookies->has("SYMFONY2_MSGB_ANALYZE_END") && !isset($_POST['clear_date']) ){
	            $end_datetime = $cookies->get("SYMFONY2_MSGB_ANALYZE_END");
                $end_flag = true;
	        }
	        else{
	            $now_datetime = new \DateTime("now");
	            $end_datetime = $now_datetime->format('j-n-Y H:i:s');
            }

            //INITIAL ACTION
            if($cookies->has("SYMFONY2_MSGB_ANALYZE_ACTION")){
                $action = $cookies->get("SYMFONY2_MSGB_ANALYZE_ACTION");
                if(isset($_POST['action'])){
                    if($_POST['action'] == "All"){
                        $action = "All";
                    }
                }
            }
            else $action = "All";

            //INITIAL USER
            if($cookies->has("SYMFONY2_MSGB_ANALYZE_USER") && !isset($_POST['clear_user'])){
                $user = $cookies->get("SYMFONY2_MSGB_ANALYZE_USER");
            }
            
            //INITIAL CLASS
            if($cookies->has("SYMFONY2_MSGB_ANALYZE_CLASS")){
                $product = $this->getDoctrine()
                    ->getRepository('AcmeMsgbBundle:msgb_class')
                    ->find($cookies->get("SYMFONY2_MSGB_ANALYZE_CLASS"));
                if($product){
                    $class = $cookies->get("SYMFONY2_MSGB_ANALYZE_CLASS");
                    if(isset($_POST['class'])){
                        if($_POST['class'] == 0){
                            $class = 0;
                        }
                    }
                }
                else{
                    msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_CLASS", null);
                    $class = 0;
                }
            }
            
            //INITIAL SORT
            if($cookies->has("SYMFONY2_MSGB_ANALYZE_SORT")){
                $sort = $cookies->get("SYMFONY2_MSGB_ANALYZE_SORT");
            }
            
            //POST TO COOKIES
            if($request->getMethod() == 'POST'){
            
                //DATE
                if(isset($_POST['set_date'])){
                    if(isset($_POST['start_datetime'])){
                        msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_START", $_POST['start_datetime']);
                        $start_datetime = $_POST['start_datetime'];
                        $start_flag = true;
                    }
                    if(isset($_POST['end_datetime'])){
                        msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_END", $_POST['end_datetime']);
                        $end_datetime = $_POST['end_datetime'];
                        $end_flag = true;
                    }
                }
                if(isset($_POST['clear_date'])){
                    msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_START", null);
                    msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_END", null);
                }
                
                //ACTION
                if(isset($_POST['action'])){
                    if($_POST['action'] == "All")
                        msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_ACTION", null);
                    else msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_ACTION", $_POST['action']);
                    $action = $_POST['action'];
                }
                
                //USER
                if(isset($_POST['set_user'])){
                    msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_USER", $_POST['user']);
                    $user = $_POST['user'];
                }
                if(isset($_POST['clear_user'])){
                    msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_USER", null);
                    $user = null;
                }
                
                //CLASS
                if(isset($_POST['class'])){
                    if($_POST['class'] == 0){
                        msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_CLASS", null);
                        $class = $_POST['class'];
                    }
                    else{
                        $product = $this->getDoctrine()
                            ->getRepository('AcmeMsgbBundle:msgb_class')
                            ->find($_POST['class']);
                        if($product){
                            msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_CLASS", $_POST['class']);
                            $class = $_POST['class'];
                        }
                        else{
                            msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_CLASS", null);
                            $class = 0;
                        }
                    }
                }
                
                //SORT
                if(isset($_POST['sort_account'])){
                    if($cookies->has("SYMFONY2_MSGB_ANALYZE_SORT")){
                        if($cookies->get("SYMFONY2_MSGB_ANALYZE_SORT") == "account_ASC"){
                            msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_SORT", "account_DESC");
                            $sort = "account_DESC";
                        }
                        else{
                            msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_SORT", "account_ASC");
                            $sort = "account_ASC";
                        }
                    }
                    else{
                        msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_SORT", "account_ASC");
                        $sort = "account_ASC";
                    }
                }
                else if(isset($_POST['sort_time'])){
                    if($cookies->has("SYMFONY2_MSGB_ANALYZE_SORT")){
                        msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_SORT", null);
                        $sort = "time_DESC";
                    }
                    else{
                        msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_SORT", "time_ASC");
                        $sort = "time_ASC";
                    }
                }
            }
	        
            //QUERY PROCESS
            $start = new \Datetime($start_datetime);
            $end = new \Datetime($end_datetime);
            
                //QUERY DATE
                $qb->where('p.time >= \''.$start->format("Y-m-d H:i:s").'\'')
                    ->andWhere('p.time <= \''.$end->format("Y-m-d H:i:s").'\'');
                
                //QUERY ACTION
                if($action!="All"){
                    
                    if($action == "login&logout"){
                        $qb->andWhere(
                            $qb->expr()->orx(
                                'p.action = \'login\'' ,
                                'p.action = \'logout\''
                            )
                        );
                    }
                    else{
                        $qb->andWhere('p.action = \''.$action.'\'');
                    }
                }
                
                //QUERY USER
                if($user!=null){
                    if($action == "message"){
                        $qb->andWhere('p.nickname = \''.$user.'\'');
                    }
                    else{
                        $user_ids = $this
                            ->getDoctrine()
                            ->getRepository('AcmeMsgbBundle:msgb_admin')
                            ->createQueryBuilder('p')
                            ->where('p.nickname = \''.$user.'\'')
            			    ->getQuery()
            			    ->getResult();
        			    if($user_ids){
            			    $qb->andWhere('p.admin_id = '.$user_ids[0]->getId());
    			        }
    			        else{
    			            $user = null;
    			            msgb_functions::set_cookie("SYMFONY2_MSGB_ANALYZE_USER", null);
			            }
                    }
                }
                
                //QUERY CLASS
                if($class!=0){
                
                    $tmp_logs = $qb->getQuery()->getResult();
                    if($tmp_logs){
                        $first_day = $tmp_logs[sizeOf($tmp_logs)-1]->getTime();
                        $first_y = $first_day->format('Y');
                        $first_m = $first_day->format('m');
                        $first_d = $first_day->format('d');
                        
                        $a_cls = $this->getDoctrine()
                            ->getRepository('AcmeMsgbBundle:msgb_class')
                            ->find($class);
                            
                        $class_start = $a_cls->getStart();
                        $class_end = $a_cls->getEnd();
                        
                        $class_start = new \Datetime(
                                $first_y."-".$first_m."-".$first_d." ".
                                $class_start->format("H").":".$class_start->format("i").":00"
                            );
                        $class_end = new \Datetime(
                                $first_y."-".$first_m."-".$first_d." ".
                                $class_end->format("H").":".$class_end->format("i").":00"
                            );
                        if($class_end<$class_start){
                            $class_start->sub(new \DateInterval("P1D"));
                        }
                        
                        $or = $qb->expr()->orx();
                        
                        while($class_start<$end){
                            $or->add(
                                $qb->expr()->andx(
                                    $qb->expr()->gte('p.time', "'".$class_start->format('Y-n-j H:i:s')."'") ,
                                    $qb->expr()->lte('p.time', "'".$class_end->format('Y-n-j H:i:s')."'")
                                )
                            );
                            $class_start->add(new \DateInterval("P1D"));
                            $class_end->add(new \DateInterval("P1D"));
                        }
                        $qb->andWhere($or);
                    }
                }
            
            
            //GET ANALYZE
                $count_logs_qb = clone $qb;
                $count_logs_qb
                    ->select('p.id , SUBSTRING(p.time , 1 , 10) AS date , COUNT(p) AS num')
                    ->orderBy('p.time',null);
                $count_logs_q = $count_logs_qb->getQuery();

                //GET SQL
                $sql = $count_logs_q->getSql();
                
                //INSERT GROUP BY
                preg_match("/ORDER BY .*/", $sql , $matches);
                $str_order_by = $matches[0];
                $sql = substr ($sql, 0, strlen($sql)-strlen($str_order_by));
                $sql .= "GROUP BY SUBSTRING(m0_.time FROM 1 FOR 10) ".$str_order_by;
                
                //NATIVE QUERY
                $rsm = new ResultSetMapping;
                $rsm->addEntityResult('AcmeMsgbBundle:msgb_log', 't');
                $rsm->addFieldResult('t', 'id', 'id');
                $rsm->addScalarResult('sclr1', 'date');
                $rsm->addScalarResult('sclr2', 'num');
                $qns = $this->getDoctrine()->getEntityManager()->createNativeQuery($sql, $rsm);
                
                //GET RESULT
                $count_logs = $qns->getResult();
                
                //CREATE ALL DAY ARRAY
                $count_logs_date_array = null;
                $count_logs_count_array = null;
                $tmp_date = new \DateTime($start->format('Y-m-d')." 00:00:00");
                while($tmp_date<=$end){
                    $count_logs_date_array[] = clone $tmp_date;
                    $tmp_date->add(new \DateInterval("P1D"));
                }
                

            //SORT
            if($sort == "account_ASC")
                $qb->orderBy('p.account','ASC');
            else if($sort == "account_DESC")
                $qb->orderBy('p.account','DESC');
            else if($sort == "time_ASC")
                $qb->orderBy('p.time','ASC');

            //THE PAGE CONTROLLER
		    $firstResult=($page-1)*$page_size;
		    $maxResult=$page_size;
            //END OF THE PAGE CONTROLLER

            //FIND NUMBER OF THE PAGE
		    $msg_num = sizeOf($qb->getQuery()->getResult());
		    $page_num = ceil($msg_num/$page_size);
		    if($page_num ==0)$page_num++;
	        //END OF FIND NUMBER OF THE PAGE
	        
	        //GET RESULT
            $query_logs = $qb->getQuery();
	        $query_logs=$query_logs->setFirstResult($firstResult)->setMaxResults($maxResult);
	        $logs=$query_logs->getResult();
	        
	        
            //GET ADMIN LIST
            $admins=null;
            $msgs=null;
            foreach($logs as $log){
                $tmp_admin = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb_admin')->createQueryBuilder('p')
		            ->where('p.id  = ?1')
		            ->setParameter('1',$log->getAdminId())
		            ->getQuery()
                    ->getResult();
                if($tmp_admin)
                    $admins[$log->getAdminId()]=$tmp_admin[0];
                if($log->getAction()=="message"||$log->getAction()=="reply"||$log->getAction()=="remove_reply"){
                    $tmp_msg = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb')->createQueryBuilder('p')
		                ->where('p.id  = ?1')
		                ->setParameter('1',$log->getTargetId())
		                ->getQuery()
                        ->getResult();
                    if($tmp_msg)
                        $msgs[$log->getTargetId()]=$tmp_msg[0];
                }
            }
            //END OF GET ADMIN LIST
            
            return $this->render('AcmeMsgbBundle:Default:admin_analyze.html.twig' ,
                array(
                    //DATA
                    'logs' => $logs ,
                    'admins' => $admins ,
                    'msgs' => $msgs ,
                    'classes' => $classes ,
                    //ANALYZE
                    'count_logs' => $count_logs ,
                    'count_logs_date_array' => $count_logs_date_array ,
                    //OPTION
                    'start_datetime' => $start_datetime ,
                    'end_datetime' => $end_datetime ,
                    'start_flag' => $start_flag ,
                    'end_flag' => $end_flag ,
                    'action' => $action ,
                    'user' => $user ,
                    'class' => $class ,
                    'sort' => $sort ,
                    'page_size' => $page_size ,
                    'page' => $page ,
                    'page_num' => $page_num ,
                    //OTHER
                    'stylesheet' => $stylesheet
                )
            );
        }
        return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage')); 
    }
    public function admin_edit_classesAction(Request $request){
    
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){		            
		    if ($request->getMethod() == 'POST') {
		        if($_POST['action'] == "Add" || $_POST['action'] == "Edit"){
		            $class=null;
		            if($_POST['action'] == "Add")$class = new msgb_class();
		            else $class = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb_class')->find($_POST['id']);
		            if($class){
		                $class->setName($_POST['name']);
		                $class->setStart(new \DateTime("1900-1-1 ".$_POST['start_h'].":".$_POST['start_s'].":00",new \DateTimeZone("Asia/Taipei")));
		                $class->setEnd(new \DateTime("1900-1-1 ".$_POST['end_h'].":".$_POST['end_s'].":00",new \DateTimeZone("Asia/Taipei")));
		                $class->setSection($_POST['section']);
				        $em = $this->getDoctrine()->getEntityManager();
				        if($_POST['action'] == "Add")$em->persist($class);
				        $em->flush();
			        }
		        }
		        else if ($_POST['action'] == "Delete"){
		            $class = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb_class')->find($_POST['id']);
		            if($class){
	                    $em = $this->getDoctrine()->getEntityManager();
	                    $em->remove($class);
	                    $em->flush();
                    }
		        }
		    }
        
            //GET THEME
            $stylesheet = msgb_functions::get_stylesheet($request);
            
            //PDO CLEAR TIMEOUT ITEM
            msgb_functions::pdo_clear();
            
            //QUERY CLASSES
            $qb = $this
                ->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_class')
                ->createQueryBuilder('p');
            $classes = $qb
                ->getQuery()
                ->getResult();           
		    
            return $this->render('AcmeMsgbBundle:Default:admin_edit_classes.html.twig' ,
                array(
                    'classes' => $classes ,
                    'stylesheet' => $stylesheet
                )
            );
        }
        return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage'));
    }
	public function admin_menuAction(Request $request){
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
        
            //GET THEME
            $stylesheet = msgb_functions::get_stylesheet($request);
            
            //PDO CLEAR TIMEOUT ITEM
            msgb_functions::pdo_clear();
            
	        $product = $this->getDoctrine()
		        ->getRepository('AcmeMsgbBundle:msgb_admin')
		        ->find($_SESSION['login']);

            return $this->render('AcmeMsgbBundle:Default:admin_menu.html.twig' ,
                array(
                    'admin' => $product ,
                    'stylesheet' => $stylesheet
                )
            );
        }
        return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage'));
    }
}

