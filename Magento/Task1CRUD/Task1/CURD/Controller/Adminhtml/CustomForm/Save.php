<?php
/**
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Task1\CURD\Controller\Adminhtml\CustomForm;

use Magento\Backend\App\Action\Context;
use Magento\Backend\App\Action;
use Task1\CURD\Model\Test;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\TestFramework\Inspection\Exception;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\RequestInterface;

//use Magento\Framework\Stdlib\DateTime\DateTime;
//use Magento\Ui\Component\MassAction\Filter;
//use FME\News\Model\ResourceModel\Test\CollectionFactory;

class Save extends \Magento\Backend\App\Action
{
    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;
    protected $scopeConfig;

    protected $_escaper;
    protected $inlineTranslation;
    protected $_dateFactory;
    //protected $_modelNewsFactory;
    //  protected $collectionFactory;
    //  protected $filter;
    /**
     * @param Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param DataPersistorInterface $dataPersistor
     */
    public function __construct(
        Context $context,
        DataPersistorInterface $dataPersistor,
        \Magento\Framework\Escaper $escaper,
        \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\Stdlib\DateTime\DateTimeFactory $dateFactory
    ) {
        // $this->filter = $filter;
        // $this->collectionFactory = $collectionFactory;
        $this->dataPersistor = $dataPersistor;
        $this->scopeConfig = $scopeConfig;
        $this->_escaper = $escaper;
        $this->_dateFactory = $dateFactory;
        $this->inlineTranslation = $inlineTranslation;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {

        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            $id = $this->getRequest()->getParam('id');

            if (empty($data['id'])) {
                $data['id'] = null;
            }


            /** @var \Magento\Cms\Model\Block $model */
            $model = $this->_objectManager->create('Task1\CURD\Model\Test')->load($id);
            if (!$model->getId() && $id) {
                $this->messageManager->addError(__('This Record no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }


            $model->setData($data);


            $this->inlineTranslation->suspend();
            try {
                //////////////////// email
                $model->save();
                $this->messageManager->addSuccess(__('Saved successfully'));
                $this->dataPersistor->clear('task1curd');

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving.'));
            }

            $this->dataPersistor->set('task1curd', $data);
            return $resultRedirect->setPath('*/*/edit', ['id' => $this->getRequest()->getParam('id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}

