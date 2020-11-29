<?php

/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 29/11/20
 * Time: 8:06 PM
 */
namespace Learning\FirstModule\PluginB\Plugin;
class Product
{
    public function beforeGetName($subject)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/sortorder.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Before Execute From Plugin B');
    }

    public function aroundGetName($subject, $proceed)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/sortorder.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Around Before Proceed Execute From Plugin B');

        $return = $proceed();

        $logger->info('Around After Proceed Execute From Plugin B');

        return $return;
    }

    public function afterGetName($subject, $result)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/sortorder.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('After Execute From Plugin B');
        return $result;
    }

}