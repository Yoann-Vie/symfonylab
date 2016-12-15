<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestBundle:Default:index.html.twig');
    }

    public function paramAction($nom, $prenom)
    {
        return $this->render('TestBundle:Default:param.html.twig', array(
            'nom' => $nom,
            'prenom' => $prenom)
        );
    }
}
