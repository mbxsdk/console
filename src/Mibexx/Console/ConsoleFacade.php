<?php

namespace Mibexx\Console;


use Mibexx\Kernel\Business\Locator\Module\AbstractFacade;

/**
 * @method \Mibexx\Console\ConsoleFactory getFactory()
 */
class ConsoleFacade extends AbstractFacade
{
    /**
     * Run console application
     */
    public function runConsole()
    {
        $this->getFactory()->getApplication()->run();
    }
}