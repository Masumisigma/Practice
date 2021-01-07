<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 12/12/20
 * Time: 7:47 PM
 */

namespace Task1\CURD\Controller\Adminhtml\CustomForm;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\JsonFactory;
use Task1\CURD\Model\Test;


class InlineEdit
{
    protected $test;
    protected $jsonFactory;
    public function __construct(Action\Context $context,JsonFactory $jsonFactory,Test $test)
    {
        $this->test =$test;
        $this->jsonFactory =$jsonFactory;
        parent::__construct($context);
    }
    public function execute()
    {
       /* echo "hi";
        die;*/
        $resultJson = $this->jsonFactory->create();
        $error =  false;
        $message = [];
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/inline.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Simple Text Log'); // Simple Text Log
        $logger->info('Array Log'.print_r($this->getRequest()->getParam(), true));
      //  die;
        if($this->getRequest()->getParam('isAjax'))
        {
            $postItems = $this->getRequest()->getParam('items',[]);


        }
    }

}