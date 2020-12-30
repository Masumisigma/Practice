<?php
namespace Task2\CustomAttribute\Observer;
use Magento\Framework\Event\ObserverInterface;

class Lock implements ObserverInterface
{
   /* public function lockAttributes(\Magento\Framework\Event\ObserverInterface $observer) {
        $event = $observer->getEvent();
        $product = $event->getProduct();
        $product->lockAttribute('attribute_code');
    }*/
public function execute(\Magento\Framework\Event\Observer $observer)
{
   /* $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/testlock.log');
    $logger = new \Zend\Log\Logger();
    $logger->addWriter("called lock execute");
    $logger->info();
    exit;*/
$event = $observer->getEvent();
$product = $event->getProduct();
    $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/testlock.log');
    $logger = new \Zend\Log\Logger();
    $logger->addWriter($writer);
    $logger->info('Lock called');
$product->lockAttribute('dynamic_price');
}
}
