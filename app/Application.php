<?php
/**
 * Class Application
 */
namespace RenéRoboter\Shell;

/**
 * Class Application
 */
class Application
{
    /**
     * @var bool
     */
    protected $applicationStatus = false;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->loop();
    }

    /**
     * start
     */
    public function start()
    {
        $this->applicationStatus = true;
    }

    /**
     * stop
     */
    public function stop()
    {
        $this->applicationStatus = false;
    }

    /**
     * loop
     */
    protected function loop()
    {
        $shell = new Shell();
        while (true) {
            $shell->run();
            if (!$this->applicationStatus) {
                break;
            }
        }
    }
}