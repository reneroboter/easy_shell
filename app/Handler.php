<?php

/**
 * Class Handler
 */
namespace RenéRoboter\Shell;

/**
 * Class Handler
 */
class Handler
{
    /**
     * @var array
     */
    protected $builtInCommands = ['cd', 'mkdir'];

    /**
     * @param $command
     * @return string
     */
    public function handle($command)
    {
        if($this->hasBuiltInCommands($command)) {

        }
        return shell_exec($command);
    }

    /**
     * @param $command
     * @return bool
     */
    public function hasBuiltInCommands($command)
    {
        if (strpos($command, $this->builtInCommands)) {
            return true;
        }
        return false;
    }
}