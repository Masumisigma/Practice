<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 12/12/20
 * Time: 7:18 PM
 */

namespace Task1\CURD\Controller\Adminhtml\CustomForm;


use Magento\Backend\App\Action;

class Delete extends Action
{
    protected $modelJob;

    /**
     * @param Action\Context $context
     * @param \Emipro\Custom\Model\Job $model
     */
    public function __construct(
        Action\Context $context,
        \Task1\CURD\Model\Test $model
    ) {
        parent::__construct($context);
        $this->modelJob = $model;
    }

    /**
     * {@inheritdoc}
     */

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
         $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->modelJob;
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('Record deleted'));
                return $resultRedirect->setPath('*/*/index');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('Record does not exist'));
        return $resultRedirect->setPath('*/*/index');
    }
}