<?php

// src/Controller/controlador_nro.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class controlador_nro
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Numero al azar: '.$number.'</body></html>'
        );
    }
}


