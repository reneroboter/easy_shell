<?php

/**
 *
 */
namespace RenéRoboter\Shell;

/**
 * Class Shell
 */
class Shell
{
    /**
     * run
     */
    public function run()
    {
        echo $this->execute($this->prompt());
    }

    /**
     * prompt
     */
    protected function prompt()
    {
        return readline('> ');
    }

    /**
     * execute
     * @param $command
     * @return string
     */
    protected function execute($command)
    {
        return shell_exec($command);
    }
}