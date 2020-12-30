<?php

namespace Task2\CustomAttribute\Model\Attribute\Source;

class Material extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('Cotton'), 'value' => '1'],
                ['label' => __('Leather'), 'value' => '2'],
                ['label' => __('Silk'), 'value' => '3'],
                ['label' => __('Denim'), 'value' => '4'],
                ['label' => __('Fur'), 'value' => '5'],
                ['label' => __('Wool'), 'value' => '6']
            ];
        }
        return $this->_options;
    }
}