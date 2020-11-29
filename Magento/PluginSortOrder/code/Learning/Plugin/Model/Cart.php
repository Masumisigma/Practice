<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 28/11/20
 * Time: 6:16 PM
 */
namespace Learning\Plugin\Model;
class Cart
{
    public function beforeAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    ) {
       /* $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/plugin-test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info(print_r($requestInfo, true));*/
        $requestInfo['qty'] = 10; // increasing quantity to 10
        return array($productInfo, $requestInfo);
    }
    /*public function aroundAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    ) {
        $requestInfo['qty'] = 20; // increasing quantity to 10
        return array($productInfo, $requestInfo);
    }*/
   /* public function afterAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    ) {
        $requestInfo['qty'] = 30; // increasing quantity to 10
        return array($productInfo, $requestInfo);
    }*/
}