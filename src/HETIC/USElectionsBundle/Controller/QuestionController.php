<?php

namespace HETIC\USElectionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    public function indexAction()
    {

        // $em = $this->getDoctrine()->getManager();
        // $questions = $em->getRepository('HETICUSElectionsBundle:Questions')->findAll(array(), array(), 8);

        return $this->render('HETICUSElectionsBundle:Questions:index.html.twig'
            // array('questions' => $questions)
        );
    }
}
