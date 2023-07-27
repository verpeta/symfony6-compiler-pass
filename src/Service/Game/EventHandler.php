<?php

declare(strict_types=1);

namespace App\Service\Game;

use App\Service\Game\Events\IGameEvent;
use App\Service\Game\Events\KillEvent;

class EventHandler
{

    /**
     * @var IGameEvent[]
     */
    protected array $handlers = [];

    public function __construct(iterable $handlers)
    {
        $handlers = $handlers instanceof \Traversable ? iterator_to_array($handlers) : $handlers;

       $this->handlers = $handlers;
    }

//    public function addHandler(IGameEvent $transport): void
//    {
//        $this->handlers[] = $transport;
//    }
//
//    public function getHandler($alias): ?IGameEvent
//    {
//        return $this->handlers[$alias] ?? null;
//    }

    public function dispatch(string $eventName, array $eventData): EventResultDto
    {

        return $this->foundEventHandler($eventName)->handle($eventData);
    }

    private function foundEventHandler(string $eventName): IGameEvent
    {
        if (!isset($this->handlers[$eventName])) {
            throw new \InvalidArgumentException(sprintf('Event handler for event "%s" not found', $eventName));
        }
        return $this->handlers[$eventName];
    }
}