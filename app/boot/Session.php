<?php
namespace boot;

use linger\framework\Application;
use linger\framework\Bootstrap;

class Session implements Bootstrap {
    public function bootstrap(Application $application)
    {
        echo __METHOD__;
        \session_start();
    }
}