<?php

/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 15/12/20
 * Time: 6:57 PM
 */

namespace Task1\CURD\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action implements HttpGetActionInterface
{
    /**
     * Show Contact Us page
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
