<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\component\string\u;
class VinylController
{
    #[Route('/')]
    function homepage()
    {
        die("test");
    }

    #[Route('/browse/{slug}')]
    function browse(string $slug = null): Response
    {
        if($slug){
            $title = 'Genre: '.u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All Genres';
        }
        return new Response($title);
    }
}
