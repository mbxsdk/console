<?php

namespace Mibexx\Console\Business\Provider;


use Mibexx\Console\Business\Command\CommandCollection;
use Mibexx\Console\Business\Model\Application;

class ConsoleApplicationProvider
{
    /**
     * @var CommandCollection
     */
    private $commandCollection;

    /**
     * @var Application
     */
    private $application;

    /**
     * ConsoleApplicationProvider constructor.
     *
     * @param CommandCollection $commandCollection
     * @param Application $application
     */
    public function __construct(CommandCollection $commandCollection, Application $application)
    {
        $this->commandCollection = $commandCollection;
        $this->application = $application;
    }

    public function provideCommands()
    {
        foreach ($this->commandCollection as $command) {
            $this->application->add($command);
        }
    }


}