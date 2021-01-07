<?php

/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 15/12/20
 * Time: 4:05 PM
 */
namespace Task1\CURD\Block;

use Magento\Framework\View\Element\Template;
class MyForm extends Template
{
    public function __construct(Template\Context $context, array $data)
    {
        parent::__construct($context, $data);
    }
    public function getFormAction()
    {
        return $this->getUrl('customform/index/post',['_secure' => true]);
    }

}