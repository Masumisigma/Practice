<?php

namespace Task2\CustomAttribute\Model\Attribute\Source;

class CustomMaterialSource extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('A'), 'value' => 'A'],
                ['label' => __('B'), 'value' => 'B'],
                ['label' => __('C'), 'value' => 'C'],
                ['label' => __('D'), 'value' => 'D'],
                ['label' => __('E'), 'value' => 'E'],
                ['label' => __('F'), 'value' => 'F'],
                ['label' => __('G'), 'value' => 'G'],
            ];
        }
        return $this->_options;
    }
}