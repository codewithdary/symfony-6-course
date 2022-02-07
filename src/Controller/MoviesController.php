<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class MoviesController extends AbstractController
{
    private $movieRepository;
    public function __construct(MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }
    
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        //Sql
        //findAll() - SELECT * FROM movies;
        //find() - SELECT * from movies WHERE id = 1;
        //findBy() - SELECT * FROM movies ORDER BY id DESC;
        //findBy() - SELECT * from movies WHERE id = 1 AND title = 'The Dark Knight'
        //count() - SELECT COUNT(id) FROM movies

        //Commands
        //$movies = $this->movieRepository->findAll();
        //$movies = $this->movieRepository->find(1);
        //$movies = $this->movieRepository->findBy([], ['id' => 'DESC']);
        //$movies = $this->movieRepository->findOneBy(['id' => 1, 'title' => 'The Dark Knight', []]);
        //$movies = $this->movieRepository->count([]);

        return $this->render('index.html.twig');
    }
}
