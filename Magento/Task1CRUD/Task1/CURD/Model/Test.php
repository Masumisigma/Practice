<?php
namespace Task1\CURD\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Task1\CURD\Model\ResourceModel\Test');
    }
    
}