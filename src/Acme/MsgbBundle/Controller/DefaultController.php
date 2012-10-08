<?php

namespace Acme\MsgbBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\MsgbBundle\Entity\msgb;
use Acme\MsgbBundle\Form\Type\MsgbType;
use Acme\MsgbBundle\Entity\msgb_admin;
use Acme\MsgbBundle\Form\Type\Msgb_adminType;



class DefaultController extends Controller
{
	public function indexAction($page_size,$page,Request $request)
    {    
        $response = new Response();
        
        if(isset($_POST['stylesheet'])){
            msgb_functions::set_cookie('SYMFONY2_MSGB_THEME',$_POST['stylesheet']);
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array( 'page_size' => $page_size , 'page' => $page )));
        }
        
        //GET THEME
        $stylesheet = msgb_functions::get_stylesheet($request);
        
        //PDO CLEAR TIMEOUT ITEM
        msgb_functions::pdo_clear();
        
		//the_page_contorler
		if(isset($_POST['change_page_size']))
		    return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $_POST['change_page_size'])));
		$firstResult=($page-1)*$page_size;
		$maxResult=$page_size;
		
		//QUERY THE BOARD
		$em = $this->getDoctrine()->getEntityManager();
		
		$query = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb')->createQueryBuilder('p')
			->orderBy('p.time', 'DESC')
			->getQuery();
        //End of QUERY THE BOARD
		
        //find number of pages
		$msg_num = sizeOf($query->getResult());
		$page_num = ceil($msg_num/$page_size);
		if($page_num ==0)$page_num++;
		
		$query=$query->setFirstResult($firstResult)->setMaxResults($maxResult);
		
		$msgs = $query->getResult();

        //get_replyer
        $replyers_in_this_page=null;
        foreach($msgs as $this_msg){
            if($this_msg->getReplyer()!=null){
	            $replyer_in_this_page = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb_admin') ->createQueryBuilder('p')
		            ->where('p.id  = ?1')
		            ->setParameter('1',$this_msg->getReplyer())
		            ->getQuery()
                    ->getResult();
                if($replyer_in_this_page)
                    $replyers_in_this_page[$this_msg->getId()]=$replyer_in_this_page[0];
            }
        }
        //End of get_replyer
		
		//comment_box, load cookie
        $cookies = $request->cookies;
		$msg = new Msgb();
        if($cookies->has('SYMFONY2_MSGB_ACCOUNT'))
            $msg->setAccount($cookies->get('SYMFONY2_MSGB_ACCOUNT'));
        if($cookies->has('SYMFONY2_MSGB_NICKNAME'))
            $msg->setNickname($cookies->get('SYMFONY2_MSGB_NICKNAME'));
        if($cookies->has('SYMFONY2_MSGB_MOBILE'))
            $msg->setMobile($cookies->get('SYMFONY2_MSGB_MOBILE'));
        $form = $this->createForm(new MsgbType(),$msg);
        
		//create entity & page_ctrler
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
            $validator = $this->get('validator');
            $errors=$validator->validate($msg);
			if (count($errors)==0) {

                    //save cookie
                    $response = new Response();
                    $cookie = new Cookie('SYMFONY2_MSGB_ACCOUNT',$msg->getAccount());
                    $response->headers->setCookie($cookie);
                    $cookie = new Cookie('SYMFONY2_MSGB_NICKNAME',$msg->getNickname());
                    $response->headers->setCookie($cookie);
                    $cookie = new Cookie('SYMFONY2_MSGB_MOBILE',$msg->getMobile());
                    $response->headers->setCookie($cookie);
                    $response->send();

                    //DataTimeZone
                    $now = new \DateTime('now',new \DateTimeZone('Asia/Taipei'));
                    $msg->setTime($now);

                    //Initial null value
                    $msg->setReplyer("");
                    $msg->setReply_contant("");
                    $msg->setReply_time(new \DateTime('now',new \DateTimeZone('Asia/Taipei')));

                    //ip
                    $ip="";
                    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
                        $ip=$_SERVER['HTTP_CLIENT_IP'];
                    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
                        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
                    else
                        $ip=$_SERVER['REMOTE_ADDR'];
                    $msg->setIp($ip);

                    // perform some action, such as saving the task to the database
				    $em = $this->getDoctrine()->getEntityManager();
				    $em->persist($msg);
				    $em->flush();

                    //WRITE LOG
                    msgb_functions::write_log($this->getDoctrine()->getEntityManager(),"",$msg->getAccount(),$msg->getNickname(),$msg->getId(),"message");
                    //End of WRITE LOG

				    return $this->redirect(
                        $this->generateUrl('AcmeMsgbBundle_homepage',
                            Array('page_size'=>$page_size)
                        )
                    );
			}
		    else{
                if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
                    $admin = $this->getDoctrine()
                        ->getRepository('AcmeMsgbBundle:msgb_admin')
                        ->find($_SESSION['login']);
		            return $this->render('AcmeMsgbBundle:Default:index.html.twig' ,
			            array('form' => $form->createView() ,
			            'msgs' => $msgs ,
			            'page_size' => $page_size ,
			            'page_num' => $page_num ,
			            'page' => $page ,
			            'admin' => $admin ,
                        'stylesheet' => $stylesheet ,
                        'replyers_in_this_page' => $replyers_in_this_page ,
                        'errors' => $errors
			            )
		            );
                }
                else
		            return $this->render('AcmeMsgbBundle:Guest:guest.html.twig' ,
			            array('form' => $form->createView() ,
			            'msgs' => $msgs ,
			            'page_size' => $page_size ,
			            'page_num' => $page_num ,
			            'page' => $page ,
                        'stylesheet' => $stylesheet ,
                        'replyers_in_this_page' => $replyers_in_this_page ,
                        'errors' => $errors
			            )
		            );
            }
		}
		if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
            $admin = $this->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_admin')
                ->find($_SESSION['login']);
		    return $this->render('AcmeMsgbBundle:Default:index.html.twig' ,
			    array('form' => $form->createView() ,
			    'msgs' => $msgs ,
			    'page_size' => $page_size ,
			    'page_num' => $page_num ,
			    'page' => $page ,
			    'admin' => $admin ,
                'stylesheet' => $stylesheet ,
                'replyers_in_this_page' => $replyers_in_this_page ,
                'errors' => null
			    )
		    );
        }
        else
		    return $this->render('AcmeMsgbBundle:Guest:guest.html.twig' ,
			    array('form' => $form->createView() ,
			    'msgs' => $msgs ,
			    'page_size' => $page_size ,
			    'page_num' => $page_num ,
			    'page' => $page ,
                'stylesheet' => $stylesheet ,
                'replyers_in_this_page' => $replyers_in_this_page ,
                'errors' => null
			    )
		    );
    }
	public function signupAction($page_size,$page,Request $request){
        //GET THEME
        $stylesheet = msgb_functions::get_stylesheet($request);
        
        //PDO CLEAR TIMEOUT ITEM
        msgb_functions::pdo_clear();
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager()))
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size,'page' => $page)));
        else{
            // create signup form
            $admin_data = new msgb_admin();
            $form = $this->createForm(new Msgb_adminType(),$admin_data);
    		if ($request->getMethod() == 'POST') {
		        $form->bindRequest($request);
                $validator = $this->get('validator');
                $errors=$validator->validate($admin_data);
			    if (count($errors)==0) {
                    $product = $this->getDoctrine()
			            ->getRepository('AcmeMsgbBundle:msgb_admin')
			            ->findBy(Array('account'=>$admin_data->getAccount()));
                    if(sizeOf($product)>0){
                        $errors[0] = new fake_error();
                        $errors[0]->setMessage("This account has already been used!");
                        return $this->render('AcmeMsgbBundle:Guest:signup.html.twig' ,
	                        array('form' => $form->createView() ,
	                        'page_size' => $page_size ,
	                        'page' => $page ,
                            'stylesheet' => $stylesheet ,
                            'errors' => $errors
	                        )
                        );
                    }
                    else{
                        //$admin_data->setSession_id(session_id());
			            $em = $this->getDoctrine()->getEntityManager();
			            $em->persist($admin_data);
			            $em->flush();
                        $_SESSION['login']=$admin_data->getId();

                        //WRITE LOG
                        msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$admin_data->getId(),$admin_data->getAccount(),$admin_data->getNickname(),"","signup");
                        //End of WRITE LOG

                        return $this->redirect($this->generateUrl('AcmeMsgbBundle_admin_menu'));
                        //return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size,'page' => $page)));
                    }
		        }
                else{
                    return $this->render('AcmeMsgbBundle:Guest:signup.html.twig' ,
	                    array(
                            'form' => $form->createView() ,
	                        'page_size' => $page_size ,
	                        'page' => $page ,
                            'stylesheet' => $stylesheet ,
                            'errors' => $errors
	                    )
                    );
                }
            }
            return $this->render('AcmeMsgbBundle:Guest:signup.html.twig' ,
	            array('form' => $form->createView() ,
	            'page_size' => $page_size ,
	            'page' => $page ,
                'stylesheet' => $stylesheet ,
                'errors' => null
	            )
            );
		}
	}
	public function loginAction($page_size,$page,Request $request){
        //GET THEME
        $stylesheet = msgb_functions::get_stylesheet($request);
        
        //PDO CLEAR TIMEOUT ITEM
        msgb_functions::pdo_clear();
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager()))
            return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size,'page' => $page)));
        else{
            // create login form
            $admin_data = new msgb_admin();
            $form = $this->createForm(new Msgb_adminType(),$admin_data);
    		if ($request->getMethod() == 'POST') {
		        $form->bindRequest($request);
                $validator = $this->get('validator');
                $errors=$validator->validate($admin_data);
			    if (count($errors)==0) {
                    $product = $this->getDoctrine()
			            ->getRepository('AcmeMsgbBundle:msgb_admin')
			            ->findOneBy(Array('account'=>$admin_data->getAccount()));
                    if(sizeOf($product)==0){
                        $errors[0] = new fake_error();
                        $errors[0]->setMessage("This account is not existd!");
                        return $this->render('AcmeMsgbBundle:Guest:login.html.twig' ,
	                        array('form' => $form->createView() ,
	                        'page_size' => $page_size ,
	                        'page' => $page ,
                            'stylesheet' => $stylesheet ,
                            'errors' => $errors
	                        )
                        );
                    }
                    else if ( $admin_data->getPassword() != $product->getPassword() ){
                        $errors[0] = new fake_error();
                        $errors[0]->setMessage("Wrong password!");
                        return $this->render('AcmeMsgbBundle:Guest:login.html.twig' ,
	                        array('form' => $form->createView() ,
	                        'page_size' => $page_size ,
	                        'page' => $page ,
                            'stylesheet' => $stylesheet ,
                            'errors' => $errors
	                        )
                        );
                    }
                    else{
                        $_SESSION['login']=$product->getId();
                        $product = $this->getDoctrine()
			                ->getRepository('AcmeMsgbBundle:msgb_admin')
                            ->find($product->getId());
                        //$product->setSession_id(session_id());
			            $em = $this->getDoctrine()->getEntityManager();
			            $em->flush();

                        //WRITE LOG
                        msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$product->getId(),$product->getAccount(),$product->getNickname(),"","login");
                        //End of WRITE LOG

                        return $this->redirect($this->generateUrl('AcmeMsgbBundle_admin_menu'));
                        //return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size,'page' => $page)));
                    }
		        }
                else {
                    return $this->render('AcmeMsgbBundle:Guest:login.html.twig' ,
	                    array('form' => $form->createView() ,
	                        'page_size' => $page_size ,
	                        'page' => $page ,
                            'stylesheet' => $stylesheet,
                            'errors' => $errors
	                    )
                    );

                }
            }
            return $this->render('AcmeMsgbBundle:Guest:login.html.twig' ,
	            array('form' => $form->createView() ,
	                'page_size' => $page_size ,
	                'page' => $page ,
                    'stylesheet' => $stylesheet,
                    'errors' => null
	            )
            );
		}
	}
}
