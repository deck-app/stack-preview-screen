<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(): Response
    {
        return new Response(
            '<html><body><h1>Hello world!!!</h1></body></html>'
        );
    }

    public function test(): Response
    {
        return new Response(
            '<html><body><h1>Hello world!!!</h1> <p>Test route.</p></body></html>'
        );
    }
}