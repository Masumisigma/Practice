<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 12/12/20
 * Time: 1:53 AM
 */

namespace Task1\CURD\Block\Adminhtml\Edit\Custom;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Magento\Backend\Block\Widget\Context;

class DeleteButton extends Generic implements ButtonProviderInterface
{
    protected $context;

    public function __construct(
        Context $context
    )
    {
        $this->context = $context;

    }
    public function getButtonData()
    {
        // TODO: Implement getButtonData() method.
        $data = [];
        $id = $this->context->getRequest()->getParam('id');
        if ($id) {
            $data = [
                'label' => __('Delete'),
                'class' => 'delete',
                'on_click' => 'deleteConfirm(\'' . __(
                        'Are you sure you want to do this?'
                    ) . '\', \'' . $this->getDeleteUrl() . '\')',
                'sort_order' => 20,
            ];
        }
        return $data;

    }
    public function getDeleteUrl()
    {
        $id = $this->context->getRequest()->getParam('id');
        return $this->getUrl('*/*/delete', ['id' => $id]);
    }



}