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

    // Rotas coringa
    #[Route('/testando/{slug}')]
    // public function teste($slug): Response
    // public function url(string $slug=null): Response // colocar o tipo está em desuso
    public function url($slug=null): Response // para que não dê erro caso eu não passe nenhuma variável na URL
    {
        return new Response('Esse é o meu ' . $slug);
    }

    // Digito:
    // /testando/teste1 - "Esse é o meu teste1"
    // /testando/teste2 - "Esse é o meu teste2"
    // /testando/teste3 - "Esse é o meu teste3"
}