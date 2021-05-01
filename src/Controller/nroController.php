<?php

// src/Controller/nroController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class nroController extends AbstractController
{
    /**
     * @Route("/azar", name="nro")
     */
    public function nro (Request $request)        
    {
       $number = random_int(0, 100); 

       return $this->render('nro.html.twig',["nro" => $number]);
    }
}
       