<?php
// src/Controller/ejercicio2controller.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ejercicio2controller extends AbstractController
{
    /**
     * @Route("/ejercicio2V1", name="ejercicio2V1")
     */
    public function muestro_titulos(Request $request)    
    {
        $number = random_int(0, 10); 

        return $this->render('/ejercicio2V1.html.twig',["valor" => $number]);
    }
    /**
     * @Route("/ejercicio2V2", name="ejercicio2V2")
     */
    public function muestro_titulos2(Request $request)    
    {
        $number = random_int(0, 10); 

        return $this->render('/ejercicio2V2.html.twig',["valor" => $number]);
    }
}

 