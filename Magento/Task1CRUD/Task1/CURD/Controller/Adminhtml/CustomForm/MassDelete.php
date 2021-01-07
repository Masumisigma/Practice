<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Task1\CURD\Controller\Adminhtml\CustomForm;

use Magento\Customer\Model\Account\Redirect;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Task1\CURD\Model\ResourceModel\Test\CollectionFactory;
use Magento\Framework\Controller\Result\RedirectFactory;
use Task1\CURD\Model\Test;

/**
 * Class MassDelete
 */
class MassDelete extends \Magento\Backend\App\Action implements HttpPostActionInterface
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */

    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    protected $resultRedirectFactory;

    protected $modelJob;

    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(Context $context, Filter $filter, CollectionFactory $collectionFactory,RedirectFactory $resultRedirectFactory,Test $model)
    {
        $this->modelJob = $model;
        $this->resultRedirectFactory = $resultRedirectFactory;
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    /**
     * Execute action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
     */
    public function execute()
    {/*
        echo "hi";
        exit;*/
     $collection = $this->filter->getCollection($this->collectionFactory->create());

        $collectionSize = $collection->getSize();
       /* echo $collection->getSelect();
        die;*/

        foreach ($collection as $page) {
            $id= $page->getId();
            $item = $this->modelJob->load($id);
          //  echo get_class($page);
            $item->delete();
           // echo $page->getId();

        }

       // die;
        $this->messageManager->addSuccessMessage(__('A total of %1 record(s) have been deleted.', $collectionSize));

        //@var \Magento\Backend\Model\View\Result\Redirect $resultRedirect
        $resultRedirect = $this->resultRedirectFactory->create();
      /*  $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);*/

        return $resultRedirect->setPath('*/*/index');
    }
}