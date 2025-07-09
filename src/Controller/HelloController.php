<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Fala, meu povo!');
    }

    #[Route('/marsupial')]
    public function marsupial(): Response
    {
        return new Response('Meu Marsupial favorito!');
    }

    #[Route('/blacum')]
    public function blacum(): Response
    {
        return new Response('Tu num blacumeja!');
    }
}