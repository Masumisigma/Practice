<?php

namespace Task1\CURD\Ui\Component\Listing\Column;

class Mygender implements \Magento\Framework\Option\ArrayInterface
{
    //Here you can __construct Model

    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Male')],
            ['value' => 2, 'label' => __('Female')],
            ['value' => 3, 'label' => __('Others')]
        ];
    }
}