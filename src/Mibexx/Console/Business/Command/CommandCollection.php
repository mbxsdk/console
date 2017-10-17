<?php

namespace Mibexx\Console\Business\Command;


use Mibexx\Console\Business\Model\Command;

class CommandCollection implements \Iterator, \Countable
{
    /**
     * @var Command[]
     */
    private $commands;

    /**
     * @var int
     */
    private $position = 0;

    public function add(Command $command)
    {
        $this->commands[] = $command;
    }

    /**
     * @return Command
     */
    public function current()
    {
        return $this->commands[$this->position];
    }

    public function next()
    {
        $this->position++;
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->commands[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->commands);
    }

}