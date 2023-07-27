<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('game/index.html.twig', [
        ]);
    }

    #[Route('/', name: 'handle', methods: ['POST'])]
    public function handle(): Response
    {


        $content = '';
        return $this->render('game/index.html.twig', [
            'content' => $content,
        ]);
    }
}
