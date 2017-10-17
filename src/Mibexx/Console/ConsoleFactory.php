<?php

namespace Mibexx\Console;


use Mibexx\Console\Business\Model\Application;
use Mibexx\Console\Business\Provider\ConsoleApplicationProvider;
use Mibexx\Console\Shared\ConsoleConstants;
use Mibexx\Kernel\Business\Locator\Module\AbstractFactory;

class ConsoleFactory extends AbstractFactory
{
    /**
     * @var Application
     */
    private $application;

    /**
     * @return ConsoleApplicationProvider
     */
    public function createConsoleApplicationProvider()
    {
        return new ConsoleApplicationProvider(
            $this->getProvidedDependency(ConsoleConstants::CONSOLE_COMMANDS),
            $this->getApplication()
        );
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        if ($this->application === null) {
            $this->application = new Application();
        }

        return $this->application;
    }
}