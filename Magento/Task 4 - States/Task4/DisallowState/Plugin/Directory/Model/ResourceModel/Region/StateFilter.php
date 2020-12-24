<?php

namespace Task4\DisallowState\Plugin\Directory\Model\ResourceModel\Region;

class StateFilter
{
    protected $disallowed = [
    'American Samoa',
    'Armed Forces Africa',
    'Armed Forces Americas',
    'Armed Forces Canada',
    'Armed Forces Europe',
    'Armed Forces Middle East',
    'Armed Forces Pacific',
    'Federated States Of Micronesia',
     'Guam',
     'Marshall Islands',
    'Northern Mariana Islands',
    'Palau'

    ];

    public function afterToOptionArray($subject, $options)
    {
        $result = array_filter($options, function ($option) {
        if (isset($option['label']))
        return !in_array($option['label'], $this->disallowed);
        return true;
        });

        return $result;
    }
}
