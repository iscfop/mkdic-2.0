<?php

namespace MKD\frontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MKDfrontendBundle:Default:index.html.twig', array('name' => $name));
    }

	public function inicioAction($name = '')
    {
        return $this->render('MKDfrontendBundle:Default:inicio.html.twig', array('name' => $name));
    }    
}
