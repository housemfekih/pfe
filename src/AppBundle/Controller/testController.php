<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
class testController extends Controller
{
	/**
     * @Route("/test", name="indexxxx")
     */
    public function indexAction(Request $request)
    {
    	$user=new User();
    	$form=$this->createForm('AppBundle\Form\UserType',$user);
        // replace this example code with whatever you need
    	//submit le form 
    	/**
$form->handleRequest($request);
      
        
        if ($form->isSubmitted()) {
dump($form);
dump("aaa");
             dump($request);
            dump("aaa");
            if ($form->isValid()) {
        return new Response($request);
    	*/
        //var_dump($form->handleRequest($request));
        return $this->render('default/test.html.twig',array('form'=>$form->createView()));
    }
}
