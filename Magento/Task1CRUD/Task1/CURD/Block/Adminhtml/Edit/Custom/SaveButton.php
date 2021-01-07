<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 12/12/20
 * Time: 2:20 AM
 */

namespace Task1\CURD\Block\Adminhtml\Edit\Custom;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveButton implements ButtonProviderInterface
{
    public function getButtonData()
    {
        return [
            'label' => __('Save Member'),
            'class' => 'save primary',
            'sort_order' => 50
        ];
    }

}