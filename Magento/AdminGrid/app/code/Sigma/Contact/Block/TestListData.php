<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 2/12/20
 * Time: 8:29 PM
 */
namespace Sigma\Contact\Block;

use Magento\Framework\View\Element\Template\Context;
use Sigma\Contact\Model\TestFactory;
/**
 * Test List block
 */
class TestListData extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        Context $context,
        TestFactory $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Simple Custom Module List Page'));

        return parent::_prepareLayout();
    }

    public function getTestCollection()
    {
        $test = $this->_test->create();
        $collection = $test->getCollection();
     //   print_r($collection);
        return $collection;
    }
}
?>