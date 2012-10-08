<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Acme\TestBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('AcmeTestBundle:Default:index.html.twig', array());
    }
	public function createAction()
	{
		$product = new Product();
		$product->setName($_POST['name']);
		$product->setNewF($_POST['newF']);
		$product->setType($_POST['type']);
		$em = $this->getDoctrine()->getEntityManager();
		$em->persist($product);
		$em->flush();
		return new Response('Created product id '.$product->getId());
	}
	public function showAllAction()
	{
		$repository = $this->getDoctrine()
			->getRepository('AcmeTestBundle:Product');

		$query = $repository->createQueryBuilder('p')
			-> getQuery();
		$products = $query->getResult();
		return $this->render('AcmeTestBundle:Default:show.html.twig', array('entities' => $products));
	}
	public function queryAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$selected="";
		$title=Array('id','name','newF','type');
		$selected_title = Array();
		
		if(!(isset($_POST['select_id'])||isset($_POST['select_name'])||isset($_POST['select_newF'])||isset($_POST['select_type']))){
			$selected='p';
			$tmp=0;
			foreach ($title as &$this_title)
				array_Push($selected_title,$title[$tmp++]);
		}
		$query = $em->createQuery(
			'SELECT '.$selected.' FROM AcmeTestBundle:Product p' 
		);

		$products = $query->getResult();
		//print_r($
		return $this->render('AcmeTestBundle:Default:show.html.twig', array('entities' => $products ));
	}
}

