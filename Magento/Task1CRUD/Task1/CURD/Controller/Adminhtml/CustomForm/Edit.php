<?php

namespace Task1\CURD\Controller\Adminhtml\CustomForm;

use Magento\Backend\App\Action;
use Task1\CURD\Model\Test;
use Magento\Framework\Controller\ResultFactory;


class Edit extends Action
{
    protected $test;
    public function __construct(Action\Context $context,Test $test)
    {
        $this->test =$test;
        parent::__construct($context);
    }
    public function execute()
    {
        // TODO: Implement execute() method.
        $id=$this->getRequest()->getParam('id');
        $model = $this->test;
        if($id)
        {
            $model->load($id);
            if(!$model->getId())
            {
                $this->messageManager->addErrorMessage(__('This Data doesnot exist'));
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend($model->getId()? __('Edit Page'): __('New Page'));
        return $resultPage;
    }
}
?>