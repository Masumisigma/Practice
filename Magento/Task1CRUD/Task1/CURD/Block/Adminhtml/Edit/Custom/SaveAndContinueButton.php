<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 12/12/20
 * Time: 2:11 AM
 */

namespace Task1\CURD\Block\Adminhtml\Edit\Custom;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveAndContinueButton implements ButtonProviderInterface
{
    public function getButtonData()
    {
        return [
            'label' => __('Save And Continue'),
            'class' => 'save',
            'sort_order' => 40
        ];
    }

}