<?php
// src/Controller/ejercicio2controller.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ejercicio2controller extends AbstractController
{
    /**
     * @Route("/ejercicio2", name="ejercicio2")
     */
    public function muestro_titulos(Request $request)    
    {
        $number = random_int(0, 10); 

        return $this->render('/ejercicio2.html.twig',["valor" => $number]);
    }
}

 