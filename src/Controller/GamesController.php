<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GamesController extends AbstractController
{
    #[Route('/tictactoe', name: 'tictactoe')]
    public function index(): Response
    {
        return $this->render('games/tictactoe.html.twig', [
            'controller_name' => 'GamesController',
        ]);
    }
}
