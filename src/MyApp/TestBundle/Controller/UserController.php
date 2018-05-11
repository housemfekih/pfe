<?php

namespace MyApp\TestBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/users/", name="user_page")
     *
     * @Security("has_role('ROLE_USER')")
     */
            public function userAction(){
                return $this->render('TestBundle:User:user.html.twig');
    }





}
