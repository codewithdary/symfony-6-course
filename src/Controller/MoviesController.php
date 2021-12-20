<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    //#[Route('/movies/inception', name: 'movies')]
    //#[Route('/movies/{id}}', name: 'movies')]
    #[Route('/movies/{name}', name: 'movies', defaults: ['name'=> null], methods:['GET', 'HEAD'])]
    public function index($name): Response
    {
        return $this->json([
            'message' => $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
    
    /**
     * oldMethod
     *
     * @Route("/old", name="old")
     */
    public function oldMethod(): Response
    {
        return $this->json([
            'message' => 'Old annotations method.',
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
