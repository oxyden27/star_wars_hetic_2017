<?php

namespace HETIC\USElectionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ResultController extends Controller
{
    public function indexAction($slug)
    {

        if ($slug == 'republican') {
            $side = "republican";
        }

        if ($slug == 'democrate') {
            $side = "democrate";
        }

        return $this->render('HETICUSElectionsBundle:Result:index.html.twig', array(
            'side' => $side
        ));
    }
}
