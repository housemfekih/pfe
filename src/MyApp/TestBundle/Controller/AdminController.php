<?php

namespace MyApp\TestBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

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
        return $this->render('TestBundle:Admin:admin.html.twig');
    }





}
