<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HelloWorld
{
    /**
     * @Route("/hello")
     */
    public function index(Request $request): Response
    {
        return new JsonResponse(['mensagem' => 'Olá mundo!']);
    }
}