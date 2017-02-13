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
     * @var \RenéRoboter\Shell\Handler
     */
    protected $handler;

    /**
     * Shell constructor.
     */
    public function __construct()
    {
        $this->handler = new Handler();
    }

    /**
     * run
     */
    public function run()
    {
        echo getcwd() . "\n";
        echo get_current_user() . '@' . gethostname();
        echo $this->execute($this->prompt());
        echo "\n";
    }

    /**
     * prompt
     */
    protected function prompt()
    {
        return readline('$ ');
    }

    /**
     * execute
     * @param $command
     * @return string
     */
    protected function execute($command)
    {
        return $this->handler->handle($command);
    }
}