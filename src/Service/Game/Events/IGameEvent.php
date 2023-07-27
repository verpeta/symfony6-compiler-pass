<?php

declare(strict_types=1);

interface IGameEvent
{
    public function handle(): void;
}