<?php

namespace App;

use App\DependencyInjection\Compiler\GameEventsPass;
use App\Service\Game\Events\IGameEvent;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function build(ContainerBuilder $container): void
    {
//        $container->registerForAutoconfiguration(IGameEvent::class)
//            ->addTag('app.game.event');
//
//        $container->addCompilerPass(new GameEventsPass());

    }
}
