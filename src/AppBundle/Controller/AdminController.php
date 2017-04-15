<?php
/**
 * Created by PhpStorm.
 * User: jrojo
 * Date: 13/04/17
 * Time: 12:06
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/", name="homepageadmin")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/new_competition", name="new_competition")
     */
    public function newCompetitionAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('active', CheckboxType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Competition'))
            ->getForm();

        return $this->render('editor/editor.html.twig', array(
            'form' => $form->createView(),
        ));    }
}
