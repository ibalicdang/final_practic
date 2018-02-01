<?php

namespace AppBundle\Controller;

use AppBundle\Entity\myEntities;
use AppBundle\Form\myEntitiesType;
use AppBundle\Entity\employeeGroup;
use AppBundle\Form\employeeGroupType;
use AppBundle\Form\addGroupType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class employeeController extends Controller{

/**
*@Route("/add-employee", name="add_employee")
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
	*@Route("/", name="homepage")
	*/
		public function viewTableAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        
        $myEntities = $em->getRepository('AppBundle:myEntities')
            ->createQueryBuilder('t')
            ->orderBy('t.salary', 'DESC')
            ->getQuery()
            ->getResult();

        $get_info = $em->getRepository('AppBundle:myEntities')
            ->createQueryBuilder('t')
            ->select('SUM(t.salary) as totalSalary')
            ->getQuery()
            ->getSingleScalarResult();
       
        
        return $this->render('employee/my_views.html.twig',[
            'empInfo' => $myEntities,
            'totalSalary' => $get_info,
        ]);



    }

     /**
	*@Route("/delete/{id}", name="delete")
	*/
		public function deleteTableAction($id){

		$em = $this->getDoctrine()->getManager();
		$post = $em->getRepository('AppBundle:myEntities')->find($id);
		$em->remove($post);
		$em->flush();

		return $this->redirectToRoute('homepage');
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
  *@Route("/ageCalc")
  */
    
public function ageCalc (Request $request){
             $em = $this->getDoctrine()->getManager();
            $myEntities = $em->getRepository('AppBundle:myEntities')
            ->createQueryBuilder('t')
            ->orderBy('t.birthDate')
            ->getQuery()
            ->getResult();

  return $this->render('employee/view_solo.html.twig',[
            'myEntities' => $myEntities,
        ]);


    }

/**
*@Route("/add-group", name="add_group")
*/
public function addGroupAction(Request $request){

    $em = $this->getDoctrine()->getManager();
        
     $myEmployeeGroup = $em->getRepository('AppBundle:employeeGroup')
            ->createQueryBuilder('t')
            ->select('t.groupName')
            ->getQuery()
            ->getResult();

     $myEmployee = $em->getRepository('AppBundle:myEntities')
            ->createQueryBuilder('t')
            ->select('t.firstName')
            ->getQuery()
            ->getResult();

    $employeeGroup = new employeeGroup();
    $form=$this->createForm(new employeeGroupType(), $employeeGroup);
    $form->handleRequest($request);

    if ($form->isvalid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($employeeGroup);
      $em->flush();

      return $this->redirectToRoute('add_group');
            
    }
    
    $noGroup = "No Group";
    
         return $this->render('employee/groups.html.twig', array(
        'employeeGroup' => $myEmployeeGroup,
        'myEmployee' => $myEmployee,
        'noGroup' => $noGroup,
        'form' => $form->createView(),

    ));
         
       } 

} 

