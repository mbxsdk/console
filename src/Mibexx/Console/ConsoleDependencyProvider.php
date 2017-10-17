<?php

namespace Mibexx\Console;


use Mibexx\Console\Business\Command\CommandCollection;
use Mibexx\Console\Shared\ConsoleConstants;
use Mibexx\Dependency\Business\ContainerInterface;
use Mibexx\Dependency\Business\Provider\AbstractDependencyProvider;

class ConsoleDependencyProvider extends AbstractDependencyProvider
{
    public function defineDependencies(ContainerInterface $container)
    {
        $containe[ConsoleConstants::CONSOLE_COMMANDS] = function () {
            return new CommandCollection();
        };
    }

}