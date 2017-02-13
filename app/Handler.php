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
    protected $builtInCommands = ['cd' => 'chdir', 'mkdir' => 'mkdir'];

    /**
     * handle
     * @param $command
     * @return string
     */
    public function handle($command)
    {
        if($this->hasBuiltInCommands($command)) {
            return $this->executeBuiltIn($command);
        }
        return shell_exec($command);
    }

    /**
     * hasBuiltInCommands
     * @param $command
     * @return bool
     */
    public function hasBuiltInCommands($command)
    {
        foreach ($this->builtInCommands as $key => $value) {
            if (strpos($key, $command)  >= 0) {
                return true;
            }
        }
        return false;
    }

    /**
     * executeBuiltIn
     */
    public function executeBuiltIn($command)
    {
        foreach ($this->builtInCommands as $key => $value) {
            if (strpos($key, $command) >= 0) {
                $target = trim(str_replace($key, '', $command));
                $value($target);
                break;
            }
        }
    }
}