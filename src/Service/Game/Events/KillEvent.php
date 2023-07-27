<?php

declare(strict_types=1);

namespace App\Service\Game\Events;

use App\Service\Game\EventResultDto;

class KillEvent implements IGameEvent
{

    public const EVENT_NAME = 'kill';


    public static function getEventName(): string
    {
        return static::EVENT_NAME;
    }
    public function handle(array $data): EventResultDto
    {
        return new EventResultDto(static::class, 'Got money');
    }

}