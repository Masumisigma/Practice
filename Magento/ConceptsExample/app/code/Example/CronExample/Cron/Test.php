<?php

namespace Example\CronExample\Cron;

class Test
{

    public function execute()
    {
        echo "hi custom cron is running";

        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/cron.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info(__METHOD__);


       // return $this;

    }
}
