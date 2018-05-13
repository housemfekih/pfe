<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Templates;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Template controller.
 *
 * @Route("templates")
 */
class TemplatesController extends Controller
{
    /**
     * Lists all template entities.
     *
     * @Route("/", name="templates_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $templates = $em->getRepository('AppBundle:Templates')->findAll();

        return $this->render('templates/index.html.twig', array(
            'templates' => $templates,
        ));
    }

    /**
     * Creates a new template entity.
     *
     * @Route("/new", name="templates_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $template = new Templates();
        $form = $this->createForm('AppBundle\Form\TemplatesType', $template);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			
			
			$file = $template->getFichierNom();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('template_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $template->setFichierNom($fileName);
			
            $em = $this->getDoctrine()->getManager();
            $em->persist($template);
            $em->flush();

            return $this->redirectToRoute('templates_show', array('id' => $template->getId()));
        }

        return $this->render('templates/new.html.twig', array(
            'template' => $template,
            'form' => $form->createView(),
        ));
    }
	
	/**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    /**
     * Finds and displays a template entity.
     *
     * @Route("/{id}", name="templates_show")
     * @Method("GET")
     */
    public function showAction(Templates $template)
    {
        $deleteForm = $this->createDeleteForm($template);

        return $this->render('templates/show.html.twig', array(
            'template' => $template,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing template entity.
     *
     * @Route("/{id}/edit", name="templates_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Templates $template)
    {
        $deleteForm = $this->createDeleteForm($template);
		$oldfile = $template->getFichierNom();
		
		if (strlen($oldfile) > 0) {
			$template->setFichierNom(
				new File($this->getParameter('template_directory')."/".$oldfile)
				);
				
			
		}else {}
        $editForm = $this->createForm('AppBundle\Form\TemplatesType', $template);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('templates_edit', array('id' => $template->getId()));
        }

        return $this->render('templates/edit.html.twig', array(
            'template' => $template,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a template entity.
     *
     * @Route("/{id}", name="templates_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Templates $template)
    {
        $form = $this->createDeleteForm($template);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($template);
            $em->flush();
        }

        return $this->redirectToRoute('templates_index');
    }

    /**
     * Creates a form to delete a template entity.
     *
     * @param Templates $template The template entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Templates $template)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('templates_delete', array('id' => $template->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	
	
	/**
     * Displays a form to edit an existing template entity.
     *
     * @Route("/getOne", name="get_one")
     */
    public function oneAction(Request $request)
    {
		$id = $request->get('id');
		$em = $this->getDoctrine()->getManager();
				//$em2 = $this->getDoctrine()->getManager();

		$template = $em->getRepository('AppBundle:Templates')->find($id);
		
	//	$sectio =$em2->getRepository('AppBundle:Sections')->find($id);
		
		$group = $template->getGroupeId();
		$sectionTab = [];
		$sections = $template->getGroupeId()->getSectionsGroupeRel();
		
		
		foreach ($sections as $section) {
			$champ_tab = [];
			$champs = $section->getSectionChampsRel();
			foreach ($champs as $champ) {
				$champ_tab[$champ->getId()] = $champ->getNomChamps();
			}
			array_push( $sectionTab,["id" => $section->getId(),"name" => $section->getNomSection(),"champs" => $champ_tab]);
			
        }

		
		$res = ['name'=>$template->getGroupeId()->getNomGroupe(),
		'sections' => $sectionTab];
		
		
		return new JsonResponse($res);
		
	}
}
