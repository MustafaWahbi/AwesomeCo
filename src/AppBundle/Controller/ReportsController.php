<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\DateTime;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Reports;
class ReportsController extends Controller
{

    /**
     * @Route("/", name="report_list")
     */
    public function Reports()
    {

        $general_reports = $this->getDoctrine()->getRepository('AppBundle:Reports')->findBy(['approved' => '1','type' => 'G']);
        $site_reports = $this->getDoctrine()->getRepository('AppBundle:Reports')->findBy(['approved' => '1','type' => 'S']);
        $rejected_reports = $this->getDoctrine()->getRepository('AppBundle:Reports')->findBy(['approved' => '2']);
        return $this->render('reports/list_of_Reports.html.twig', array('general_reports' => $general_reports,'site_reports' => $site_reports));

    }

    /**
     * @Route("/approvalPage", name="approve_page")
     */
    public function approvalPage()
    {


        $general_reports = $this->getDoctrine()->getRepository('AppBundle:Reports')->findBy(['approved' => '0','type' => 'G']);
        $site_reports = $this->getDoctrine()->getRepository('AppBundle:Reports')->findBy(['approved' => '0','type' => 'S']);
        $rejected_reports = $this->getDoctrine()->getRepository('AppBundle:Reports')->findBy(['approved' => '2']);
        return $this->render('reports/approvalPage.html.twig', array('general_reports' => $general_reports,'site_reports' => $site_reports,'rejected_reports' => $rejected_reports));
    }

    /**
     * @Route("/approveForm/{id}/{action}", name="approveFrom")
     */
    public function approvalForm($id,$action,Request $request)
    {
        $report = new Reports();
        $form = $this->createFormBuilder($report)
            ->add('Justification',TextareaType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('save',SubmitType::class,array('label'=>'Save','attr' => array('class' => 'btn btn-primary','style'=>'margin-bottom:15px')))->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $report = $this->getDoctrine()->getRepository('AppBundle:Reports')->find($id);
            $report->setJustification($form['Justification']->getData());
            $report->setApproved($action);
            if($report->getParentId() && $action == 1){

                $main_report = $this->getDoctrine()->getRepository('AppBundle:Reports')->find($report->getParentId());
                $main_report->setApproved(3);
            }


            $em->flush();


            if($action == 1)$this->addFlash('notice','Report approved successfully');
            if($action == 2)$this->addFlash('notice','Report rejected successfully');

            return $this->redirectToRoute('report_list');
        }
        return $this->render('reports/approvalForm.html.twig', array('form' => $form->createView()));


    }
    /**
     * @Route("/addGeneralReport", name="general_report")
     */
    public function addGeneralReport(Request $request)
    {
        $report = new Reports();
        $form = $this->createFormBuilder($report)
            ->add('name',TextType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('description',TextareaType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('priority',ChoiceType::class,array('choices'=>array('low'=>'low','high'=>'high'),'attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('cause',TextareaType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('save',SubmitType::class,array('label'=>'Save','attr' => array('class' => 'btn btn-primary','style'=>'margin-bottom:15px')))->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $name=$form['name']->getData();
            $description=$form['description']->getData();
            $priority=$form['priority']->getData();
            $cause=$form['cause']->getData();
            $now = new \DateTime();

            $report->setName($name);
            $report->setType("G");
            $report->setDescription($description);
            $report->setPriority($priority);
            $report->setCause($cause);
            $report->setCreatedAt($now);

            $em = $this->getDoctrine()->getManager();
            $em ->persist($report);
            $em->flush();

            $this->addFlash('notice','create request has been sent to Manager');

            return $this->redirectToRoute('report_list');

        }


        return $this->render('reports/addGeneralReport.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/addSiteReport", name="site_report")
     */
    public function addSiteReport(Request $request)
    {
        $report = new Reports();
        $form = $this->createFormBuilder($report)
            ->add('name',TextType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('description',TextareaType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('priority',ChoiceType::class,array('choices'=>array('low'=>'low','high'=>'high'),'attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('latitude',TextType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('longitude',TextType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('save',SubmitType::class,array('label'=>'Save','attr' => array('class' => 'btn btn-primary','style'=>'margin-bottom:15px')))->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $name=$form['name']->getData();
            $description=$form['description']->getData();
            $priority=$form['priority']->getData();
            $latitude=$form['latitude']->getData();
            $longitude=$form['longitude']->getData();
            $now = new \DateTime();

            $report->setName($name);
            $report->setType("S");
            $report->setDescription($description);
            $report->setPriority($priority);
            $report->setLatitude($latitude);
            $report->setLongitude($longitude);
            $report->setCreatedAt($now);

            $em = $this->getDoctrine()->getManager();
            $em ->persist($report);
            $em->flush();

            $this->addFlash('notice','create request has been sent to Manager');

            return $this->redirectToRoute('report_list');

        }


        return $this->render('reports/addSiteReport.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/editSiteReport/{id}", name="edit_site_report")
     */
    public function editSiteReport($id,Request $request)
    {
        $now = new \DateTime();
        $report = $this->getDoctrine()->getRepository('AppBundle:Reports')->find($id);

        $new_report = new Reports();
        $new_report->setName($report->getName());
        $new_report->setType($report->getType());
        $new_report->setDescription($report->getDescription());
        $new_report->setPriority($report->getPriority());
        $new_report->setLatitude($report->getLatitude());
        $new_report->setLongitude($report->getLongitude());
        $form = $this->createFormBuilder($new_report)
            ->add('name',TextType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('description',TextareaType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('priority',ChoiceType::class,array('choices'=>array('low'=>'low','high'=>'high'),'attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('latitude',TextType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('longitude',TextType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('save',SubmitType::class,array('label'=>'Save','attr' => array('class' => 'btn btn-primary','style'=>'margin-bottom:15px')))->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $report->setUpdatedAt($now);

            $em->flush();///// update updated_date for the parent

            $name=$form['name']->getData();
            $description=$form['description']->getData();
            $priority=$form['priority']->getData();
            $latitude=$form['latitude']->getData();
            $longitude=$form['longitude']->getData();
            $now = new \DateTime();

            $new_report->setName($name);
            $new_report->setParentId($id);
            $new_report->setType("S");
            $new_report->setDescription($description);
            $new_report->setPriority($priority);
            $new_report->setLatitude($latitude);
            $new_report->setLongitude($longitude);
            $new_report->setCreatedAt($now);



            $em = $this->getDoctrine()->getManager();
            $em ->persist($new_report);
            $em->flush();



            $this->addFlash('notice','update request has been sent to Manager');

            return $this->redirectToRoute('report_list');

        }

        return $this->render('reports/editSiteReport.html.twig', array('form' => $form->createView()));

    }
    /**
     * @Route("/editGeneralReport/{id}", name="edit_general_report")
     */
    public function editGeneralReport($id,Request $request)
    {
        $now = new \DateTime();
        $report = $this->getDoctrine()->getRepository('AppBundle:Reports')->find($id);

        $new_report = new Reports();
        $new_report->setName($report->getName());
        $new_report->setType($report->getType());
        $new_report->setDescription($report->getDescription());
        $new_report->setPriority($report->getPriority());
        $new_report->setCause($report->getCause());
        $form = $this->createFormBuilder($new_report)
            ->add('name',TextType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('description',TextareaType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('priority',ChoiceType::class,array('choices'=>array('low'=>'low','high'=>'high'),'attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('cause',TextareaType::class,array('attr' => array('class' => 'form-control','style'=>'margin-bottom:15px')))
            ->add('save',SubmitType::class,array('label'=>'Save','attr' => array('class' => 'btn btn-primary','style'=>'margin-bottom:15px')))->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $report->setUpdatedAt($now);

            $em->flush();///// update updated_date for the parent

            $name=$form['name']->getData();
            $description=$form['description']->getData();
            $priority=$form['priority']->getData();
            $cause=$form['cause']->getData();
            $now = new \DateTime();

            $new_report->setName($name);
            $new_report->setParentId($id);
            $new_report->setType("G");
            $new_report->setDescription($description);
            $new_report->setPriority($priority);
            $new_report->setLatitude($cause);
            $new_report->setCreatedAt($now);



            $em = $this->getDoctrine()->getManager();
            $em ->persist($new_report);
            $em->flush();



            $this->addFlash('notice','update request has been sent to Manager');

            return $this->redirectToRoute('report_list');

        }

        return $this->render('reports/editGeneralReport.html.twig', array('form' => $form->createView()));

    }
    /**
     * @Route("/delete/{id}", name="delete_report")
     */
    public function deleteAction($id)
    {
        $report = $this->getDoctrine()->getRepository('AppBundle:Reports')->find($id);

        if($report){ // order found
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($report);
            $entityManager->flush();
            $this->addFlash('notice','Report successfully deleted !');
            return $this->redirectToRoute('report_list');
        }
        else {
            $this->addFlash("Report not found",'401');

            return $this->redirectToRoute('approve_page');
        }
    }
}
