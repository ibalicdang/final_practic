<?php

namespace AppBundle\Controller;

use AppBundle\Entity\myEntities;
use AppBundle\Form\myEntitiesType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class employeeController extends Controller{

/**
*@Route("/", name="homepage")
*/
public function indexAction(Request $request){


        $em = $this->getDoctrine()->getManager();
		$myEntities = new myEntities();
		$form=$this->createForm(new myEntitiesType(), $myEntities);
		$form->handleRequest($request);

		if ($form->isvalid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($myEntities);
			$em->flush();

			return $this->redirectToRoute('homepage');
						
		}
		
         return $this->render('employee/add.html.twig', array(
        'form' => $form->createView(),
    ));
         
       } 


   /**
	*@Route("/view_table", name="view_tables")
	*/
		public function viewTableAction(Request $request){

		$myEntities = $this->getDoctrine()
       ->getRepository('AppBundle:myEntities')
       ->findAll();
        return $this->render('employee/my_views.html.twig',array('empInfo'=>$myEntities));
    }
    

     /**
	*@Route("/delete/{id}", name="delete")
	*/
		public function deleteTableAction($id){

		$em = $this->getDoctrine()->getManager();
		$post = $em->getRepository('AppBundle:myEntities')->find($id);
		$em->remove($post);
		$em->flush();

		return $this->redirectToRoute('view_tables');
    }

    /**
	*@Route("/viewthis/{id}", name="view_this")
	*/
		public function viewSoloTableAction(Request $request, $id){

		$em = $this->getDoctrine()->getManager();
		$post = $em->getRepository('AppBundle:myEntities')->findBy(array('id' => $id));
      
        return $this->render('employee/view_solo.html.twig',array('empInfo'=>$post));
    
	
    }

    /**
	*@Route("/edit/{id}", name="edit_this")
	*/
		public function editTableAction(Request $request,myEntities $id){

		
		$editForm = $this->createForm('AppBundle\Form\myEntitiesType', $id);
        $editForm->handleRequest($request);
    	
         if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

         return $this->redirectToRoute('edit_this', array('id' => $id->getId()));
        }
        return $this->render('employee/edit_emp.html.twig', array(
        	'myEntities' => $id,
            'edit_form' => $editForm->createView(),
        ));

    }

     /**
     * @Route("/view")
     */
    public function indexxAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
} 

