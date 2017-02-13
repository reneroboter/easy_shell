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
     * start
     */
    public function start()
    {
        $this->applicationStatus = true;
        $this->loop();
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