<?php

namespace jinyicheng\cron;

use jinyicheng\cron\command\Run;
use jinyicheng\cron\command\Schedule;

class Service extends \think\Service
{

    public function boot()
    {
        $this->commands([
            Run::class,
            Schedule::class,
        ]);
    }
}
