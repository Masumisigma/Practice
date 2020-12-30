<?php

namespace Task2\CustomAttribute\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use PHPUnit\Runner\Exception;

class Productsaveafter implements ObserverInterface
{
   /* protected $_productloader;
    /*protected $productRepository;
      public function __construct(ProductRepositoryInterface $productRepositoryInterface)
      {
          $this->productRepository = $productRepositoryInterface;
      }*/
  /*  public function __construct(
        \Magento\Catalog\Model\ProductFactory $_productloader

    ) {
        $this->_productloader = $_productloader;
    }
    public function getLoadProduct($id)
    {
        return $this->_productloader->create()->load($id);
    }*/

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
            $_product = $observer->getProduct();  // you will get product object
        /* $_sku=$_product->getSku(); // for sku
         $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
         $logger = new \Zend\Log\Logger();
         $logger->addWriter($writer);
         $logger->info($_sku);*/
        $price = $_product->getPrice();
        $weight = $_product->getWeight();
        $dynamicPrice = $price * $weight;
       /* $_productloader = $this->getLoadProduct($_product->getId()); // for sku
        $_productloader->setDynamicPrice($dynamicPrice); // name of your custom attribute
        $_productloader->save();*/
       /* $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info($dynamicPrice);*/
            $_product->setData('dynamic_price', $dynamicPrice);
       // $_product->save();


        /* $_product->setClothingMaterial($dynamicPrice);
         $this->productRepository->save($_product);*/
        //  $_product->getResource()->saveAttribute($dynamicPrice);
      /*  try {
            //$_product->setData('dynamic_price', $dynamicPrice);
        } catch (\Exception $e) {
            $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
            $logger = new \Zend\Log\Logger();
            $logger->addWriter($writer);
            $logger->info($e);

        }*/
        // $logger->info($_product->setData('dynamic_price', $dynamicPrice));


    }
}