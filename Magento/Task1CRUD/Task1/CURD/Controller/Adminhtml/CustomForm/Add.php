<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 12/12/20
 * Time: 1:14 PM
 */

namespace Task1\CURD\Controller\Adminhtml\CustomForm;


use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\Model\View\Result\ForwardFactory;
use Magento\Backend\App\Action;

class Add extends Action
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    protected $forwardFactory;

    public function __construct(ForwardFactory $forwardFactory ,Action\Context $context)
    {
        $this->forwardFactory = $forwardFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        /*   $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
           $resultPage->getConfig()->getTitle()->prepend(__('Add New Record'));

           return $resultPage;*/
        $resultForward =  $this->forwardFactory->create();
        /*$resultForward->getConfig()->getTitle()->prepend(__('Add New Record'));*/
        return $resultForward->forward('edit');
    }
}
