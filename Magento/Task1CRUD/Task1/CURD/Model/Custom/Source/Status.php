<?php

namespace Task1\CURD\Model\Custom\Source;

class Status implements \Magento\Framework\Option\ArrayInterface
{
    //Here you can __construct Model

    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Enable')],
            ['value' => 0, 'label' => __('Disable')]
        ];
    }
}