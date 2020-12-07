<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Example\HelperExample\Controller\Index;
use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Example\HelperExample\Helper\Data;

class Index extends \Magento\Framework\App\Action\Action implements HttpGetActionInterface
{
    /**
     * Show Contact Us page
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
     public function __construct(Data $helper,\Magento\Backend\App\Action\Context $context)
   {
       parent::__construct($context);
       $this->helper = $helper;
   }
   public function execute()
   {
       /*echo "he";
       die;*/
       $this->helper->RandomFunc();
   }
}