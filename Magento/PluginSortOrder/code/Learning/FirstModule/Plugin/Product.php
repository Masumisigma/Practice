<?php

/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 29/11/20
 * Time: 8:06 PM
 */
namespace Learning\FirstModule\Plugin;
class Product
{
    public function beforeGetName(\Magento\Catalog\Model\Product $subject)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/plugin-test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Before Execute From Plugin A');

    }
    /*public function aroundSetName(\Magento\Catalog\Model\Product $subject,$name)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/plugin-test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $name.="Around";
        $logger->info(print_r($name, true));

    }*/
  /*  public function afterSetName(\Magento\Catalog\Model\Product $subject,$name)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/plugin-test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
       // $name.="After";
        $logger->info(print_r($name, true));

    }*/
    public function aroundGetName($subject, $proceed)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/PluginTest.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Around Before Proceed Execute From Plugin A');

        $return = $proceed();

        $logger->info('Around After Proceed Execute From Plugin A');

        return $return;
    }

    public function afterGetName($subject, $result)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/PluginTest.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('After Execute From Plugin A');
        return $result;
    }

}