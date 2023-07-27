<?php

declare(strict_types=1);

namespace App\Service\Game\Events;

use App\Service\Game\EventResultDto;

interface IGameEvent
{
    public static function getEventName(): string;
    public function handle(array $data): EventResultDto;
}