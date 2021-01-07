<?php

namespace Task1\CURD\Controller\Adminhtml\CustomForm;

use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Task1\CURD\Model\ResourceModel\Test\CollectionFactory;
use Task1\CURD\Model\Test;

/**
 * Class MassDisable
 */
class MassStatus extends \Magento\Backend\App\Action
{
    /**
     * @var Filter
     */
    protected $modelJob;
    protected $filter;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(Context $context, Filter $filter, CollectionFactory $collectionFactory,Test $model)
    {
        $this->modelJob = $model;
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Task1_CURD::curd');
    }

    /**
     * Execute action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
     */
    public function execute()
    {
        $status = $this->getRequest()->getParam('status');

        $collection = $this->filter->getCollection($this->collectionFactory->create());

        foreach ($collection as $item) {
           // $id= $item->getId();
             // $item->setIsActive(false);
         $item->setStatus($status);
            //$page = $this->modelJob->load($id);
            //   exit;
            //$page->save();
            //$item->setStatus($status);
          /*  $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
            $logger = new \Zend\Log\Logger();
            $logger->addWriter($writer);
            $logger->info();*/

            $item->save();
        }

        $this->messageManager->addSuccess(__('A total of %1 record have been changed.', $collection->getSize()));

        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}