<?php

namespace MyApp\TestBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;

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
                //$em = $this->getDoctrine()->getManager();
              //  $user= $em->getRepository(User::class)->findOneBy(array('id'=>3));
               // var_dump($user);
                return $this->render('TestBundle:User:user.html.twig');
    }




   // public function userAction(){
        // $em = $this->getDoctrine()->getManager();
        // $user= $em->getRepository(User::class)->findOneBy(array('id'=>3));
        // var_dump($user);
     //   $user = $this->getUser();
   //  $userManager = $this->container->get('fos_user.user_manager');
   //  $user = $userManager->findUserByUsername($this->container->get('security.context')
                    //     ->getToken()
                     //    ->getUser());
      //   return $this->render('TestBundle:User:user.html.twig',array('user'=>$user));


}
