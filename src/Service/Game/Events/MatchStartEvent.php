<?php

declare(strict_types=1);

namespace App\Service\Game\Events;

use App\Service\Game\EventResultDto;

class MatchStartEvent implements IGameEvent
{
    public const EVENT_NAME = 'match_start';


    public static function getEventName(): string
    {
        return static::EVENT_NAME;
    }

    public function handle(array $data): EventResultDto
    {
        return new EventResultDto(static::class, 'Got money');
    }
}