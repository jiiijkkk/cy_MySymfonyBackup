<?php

namespace Acme\MsgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\MsgBundle\Entity\msg;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    public function indexAction(Request $request)
    {
		//the_page_contorler
		if(!isset($page_size))$page_max=5;
		if(!isset($page))$page=1;
		$firstResult=0;
		$maxResult=5;
		
		
		// show_the_board
		$em = $this->getDoctrine()->getEntityManager();
		
		
		$query = $this->getDoctrine()->getRepository('AcmeMsgBundle:msg')->createQueryBuilder('p')
			->orderBy('p.timestamp', 'DESC')
			->getQuery();
		$msg_num = sizeOf($query->getResult());
		$query=$query->setFirstResult($firstResult)->setMaxResults($maxResult);
		
		$msgs = $query->getResult();
		
		//comment_box
		$msg = new msg();
		$msg->setName("Unnamed");
		$now = new \DateTime('now',new \DateTimeZone('Asia/Taipei'));
		$msg->setTimestamp($now);
		$form = $this->createFormBuilder($msg)
			->add('name','text')
			->add('mail','text')
			->add('contant','text')
			->getForm();
		
		//create entity & page_ctrler
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
			if ($form->isValid()) {
			// perform some action, such as saving the task to the database
			$msg->setReply("");
			$msg->setReplyer("");
			$em = $this->getDoctrine()->getEntityManager();
			$em->persist($msg);
			$em->flush();
			
			return $this->redirect($this->generateUrl('AcmeMsgBundle_homepage'));
			}
		}
		
		return $this->render('AcmeMsgBundle:Default:index.html.twig' ,
			array(
				'form' => $form->createView() ,
				'msgs' => $msgs
			)
		);
    }
}
