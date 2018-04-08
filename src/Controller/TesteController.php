<?php
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 08/04/2018
 * Time: 19:10
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TesteController
{
    /**
     * @Route("/teste_number", name="teste_number")
     */
    public function number(){
        return new Response(
            "<html><body><h1>".mt_rand(0,100)."</h1></body></html>"
        );
    }

    public function index(){
        return new Response(
            "<html><body><h1>Inicio</h1></body></html>"
        );
    }
}