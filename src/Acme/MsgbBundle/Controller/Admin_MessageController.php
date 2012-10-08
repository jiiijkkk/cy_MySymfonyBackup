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


class Admin_MessageController extends Controller
{
	public function singleAction($page_size,$page,$id,Request $request){
        //GET THEME
        $stylesheet = msgb_functions::get_stylesheet($request);
        
        //PDO CLEAR TIMEOUT ITEM
        msgb_functions::pdo_clear();

	    $query = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb') ->createQueryBuilder('p')
		    ->where('p.id  = ?1')
		    ->setParameter('1',$id)
		    ->getQuery();
	    $this_msg = $query->getResult();

        $replyer=null;
        if($this_msg[0]->getReplyer()!=null){
	        $replyer = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb_admin') ->createQueryBuilder('p')
		        ->where('p.id  = ?1')
		        ->setParameter('1',$this_msg[0]->getReplyer())
		        ->getQuery()
                ->getResult();
	        $this_msg = $query->getResult();
        }
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager()))
		    return $this->render('AcmeMsgbBundle:Default:single.html.twig' ,
			    array( 'msg' => $this_msg[0] ,
				    'page_size' => $page_size ,
                    'page' => $page ,
                    'replyer' => $replyer ,
                    'stylesheet' => $stylesheet
			    )
		    );
        else
		    return $this->render('AcmeMsgbBundle:Guest:single.html.twig' ,
			    array( 'msg' => $this_msg[0] ,
				    'page_size' => $page_size ,
                    'page' => $page ,
                    'replyer' => $replyer ,
                    'stylesheet' => $stylesheet
			    )
		    );
		
	}
	public function killAction($page_size,$id){
        
        if(
            msgb_functions::islogin($this->getDoctrine()->getEntityManager()) &&
            $product = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb')->find($id)    //CHECK IF THE MESSAGE IS STILL EXISTED
        )
        {
		    $em = $this->getDoctrine()->getEntityManager();
		    $em->remove($product);
		    $em->flush();

            //WRITE LOG
            $admin = $this->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_admin')
                ->find($_SESSION['login']);
            msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$admin->getId(),$admin->getAccount(),$admin->getNickname(),$id,"remove_message");
            //End of WRITE LOG

        }
        return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size)));
	}
	public function replyAction($page_size,$page,$id,Request $request){ //UNUSE

        //GET THEME
        $stylesheet = msgb_functions::get_stylesheet($request);
        
        //PDO CLEAR TIMEOUT ITEM
        msgb_functions::pdo_clear();

        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
            $msg=new msgb();
            if (
                $request->getMethod() == 'POST' &&
                $product = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb')->find($id)    //CHECK IF THE MESSAGE IS STILL EXISTED
            )
            {
		        $em = $this->getDoctrine()->getEntityManager();
		        $product->setReplyer($_SESSION['login']);
		        $product->setReply_contant($_POST['contant']);
		        $product->setReply_time(new \DateTime('now',new \DateTimeZone('Asia/Taipei')));
		        $em->flush();

                //WRITE LOG
                $admin = $this->getDoctrine()
	                ->getRepository('AcmeMsgbBundle:msgb_admin')
	                ->find($_SESSION['login']);
                msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$admin->getId(),$admin->getAccount(),$admin->getNickname(),$id,"reply");
                //End of WRITE LOG

            }
            //BACK TO SINGLE VIEW
            return $this->redirect(
                $this->generateUrl(
                    'AcmeMsgbBundle_single',Array(
                        'page_size' => $page_size ,
                        'page' => $page ,
                        'id'=>$id
                    )
                )
            );
            //End of BACK TO SINGLE VIEW
        }
		return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size,'page' => $page)));
	}
    public function quick_replyAction($page_size,$page,$id,Request $request){
        
        if(msgb_functions::islogin($this->getDoctrine()->getEntityManager())){
            $msg=new msgb();
            if (
                $request->getMethod() == 'POST' &&
                $product = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb')->find($id)    //CHECK IF THE MESSAGE IS STILL EXISTED
            )
            {
		        $em = $this->getDoctrine()->getEntityManager();
		        $product->setReplyer($_SESSION['login']);
		        $product->setReply_contant($_POST['contant']);
		        $product = $this->getDoctrine()
			        ->getRepository('AcmeMsgbBundle:msgb')
			        ->find($id)
                    ->setReply_time(new \DateTime('now',new \DateTimeZone('Asia/Taipei')));
		        $em->flush();

                //WRITE LOG
                $admin = $this->getDoctrine()
	                ->getRepository('AcmeMsgbBundle:msgb_admin')
	                ->find($_SESSION['login']);
                msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$admin->getId(),$admin->getAccount(),$admin->getNickname(),$id,"reply");
                //End of WRITE LOG

            }
        }
        return $this->redirect(
            $this->generateUrl(
                'AcmeMsgbBundle_homepage',Array(
                    'page_size' => $page_size ,
                    'page' => $page
                )
            )
        );
    }
	public function multikillAction($page_size){    //UNUSE
        
        if(
            $_POST &&
            msgb_functions::islogin($this->getDoctrine()->getEntityManager())
        ){

            //WRITE LOG
            $admin = $this->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_admin')
                ->find($_SESSION['login']);
            //End of WRITE LOG

            foreach($_POST as $kill_item){
                //echo $kill_item;
		        $em = $this->getDoctrine()->getEntityManager();
		        $product = $this->getDoctrine()
			        ->getRepository('AcmeMsgbBundle:msgb')
			        ->find($_POST['multi_kill_item_'.$kill_item]);
		        if($product){
		            $em->remove($product);
		            $em->flush();

                    //WRITE LOG
                    msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$admin->getId(),$admin->getAccount(),$admin->getNickname(),$id,"remove_message");
                    //End of WRITE LOG
                    
                }

            }
        }
        return $this->redirect($this->generateUrl('AcmeMsgbBundle_homepage',Array('page_size' => $page_size )));
	}
	public function kill_replyAction($page_size,$page,$id,$action){
        
        if(
            msgb_functions::islogin($this->getDoctrine()->getEntityManager()) &&
            $product = $this->getDoctrine()->getRepository('AcmeMsgbBundle:msgb')->find($id)    //CHECK IF THE MESSAGE IS STILL EXISTED
        )
        {
            $em = $this->getDoctrine()->getEntityManager();
	        $product->setReplyer("");
	        $product->setReply_contant("");
	        $em->flush();

            //WRITE LOG
            $admin = $this->getDoctrine()
                ->getRepository('AcmeMsgbBundle:msgb_admin')
                ->find($_SESSION['login']);
            msgb_functions::write_log($this->getDoctrine()->getEntityManager(),$admin->getId(),$admin->getAccount(),$admin->getNickname(),$id,"remove_reply");
            //End of WRITE LOG

        }
        if($action=='single')
            return $this->redirect(
                $this->generateUrl(
                    'AcmeMsgbBundle_single',Array(
                        'page_size' => $page_size ,
                        'page' => $page ,
                        'id' => $id
                    )
                )
            );
        else if($action=='homepage')
            return $this->redirect(
                $this->generateUrl(
                    'AcmeMsgbBundle_homepage',Array(
                        'page_size' => $page_size ,
                        'page' => $page
                    )
                )
            );
	}
}
