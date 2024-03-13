<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController
{

    #[Route('/hello_world', name: 'hello_world')]
    public function hello(): Response
    {
        return new Response('<html><body> Hello World ! </body></html>');
    }
}
?>