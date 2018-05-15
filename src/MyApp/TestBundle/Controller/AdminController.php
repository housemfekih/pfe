<?php

namespace MyApp\TestBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;

class AdminController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/admin/", name="admin_page")
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function adminAction(){
       // $em = $this->getDoctrine()->getManager();

//        $user = $this->getUser();

        //$user= $em->getRepository(User::class)->findOneBy(array('id'=>2));
       // var_dump($user);



      // $userManager = $this->container->get('fos_user.user_manager');
///$user = $userManager->findUserByUsername($this->container->get('security.context')
                   // ->getToken()
                //    ->getUser());
        return $this->render('TestBundle:Admin:admin.html.twig');
        
    }





}
