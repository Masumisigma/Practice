<?php
namespace Sigma\Contact\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Sigma\Contact\Model\ResourceModel\Test');
    }
}