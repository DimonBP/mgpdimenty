<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product2;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
	
    /**
     * @Route("/table", name="table")
     */
    public function tableAction(Request $request)
    {
        // replace this example code with whatever you need
		$em = $this->getDoctrine()->getManager();
		$records = $em->getRepository("AppBundle:Product2")->findAll();
        return $this->render('default/table.html.twig', array('table_rows' => $records));
    }
	
    /**
     * @Route("/addreq", name="addreq")
     */
	public function addreq(Request $request)
    {
		$product = new Product2();
		$product->setDate(new \DateTime('now'));
		$product->setText('Pievienot tekstu');
		
		$form = $this->createFormBuilder($product)
            ->add('text', TextType::class)
            ->add('date', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Pievienot ierakstu'))
            ->getForm();
			
		$form->handleRequest($request);
 
		if ($form->isSubmitted() && $form->isValid())
		{
			$product = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($product);
			$em->flush();
			return $this->redirectToRoute('table');
		}
		
        return $this->render('default/addreq.html.twig', array(
            'form' => $form->createView(),
        ));
    }
	
    /**
     * @Route("/updatereq/{page}", name="updatereq_n", requirements={"page": "\d+"})
     */
    public function updatereqAction(Request $request, $page)
    {
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getRepository('AppBundle:Product2');
		$product = $repository->find($page);
     
		$form = $this->createFormBuilder($product)
            ->add('text', TextType::class)
            ->add('date', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Pievienot ierakstu'))
            ->getForm();
			
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid())
		{
			$product = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($product);
			$em->flush();
			return $this->redirectToRoute('table');
		}
			
		return $this->render('default/addreq.html.twig', array(
            'form' => $form->createView(),
        ));
		
		
    }
}
