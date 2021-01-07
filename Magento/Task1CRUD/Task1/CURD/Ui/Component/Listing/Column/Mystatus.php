<?php

namespace Task1\CURD\Ui\Component\Listing\Column;

class Mystatus implements \Magento\Framework\Option\ArrayInterface
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