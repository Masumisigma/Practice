<?php
namespace Sigma\Contact\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected $_idFieldName = 'id';
    protected function _construct()
    {
        $this->_init(
            'Sigma\Contact\Model\Test',
            'Sigma\Contact\Model\ResourceModel\Test'
        );
    }
}