<?php
namespace Task1\CURD\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected $_idFieldName = 'id';
    protected function _construct()
    {
        $this->_init(
            'Task1\CURD\Model\Test',
            'Task1\CURD\Model\ResourceModel\Test'
        );
    }
}