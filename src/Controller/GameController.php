<?php

namespace App\Controller;

use App\Service\Game\EventHandler;
use App\Service\Game\Events\KillEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{


    #[Route('/', name: 'handle')]
    public function handle(EventHandler $eventHandler): Response
    {
        $result = $eventHandler->dispatch(KillEvent::EVENT_NAME, ['player' => 'player1', 'target' => 'player2']);
dd($result);


        $content = '';
        return $this->render('game/index.html.twig', [
            'content' => $content,
        ]);
    }
}
