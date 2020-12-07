<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 2/12/20
 * Time: 8:17 PM
 */

/*namespace Sigma\Contact\Controller\Index;

class ListData extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo "hii";
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
} */
namespace Sigma\Contact\Controller\Index;

class ListData extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    protected $_testFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Sigma\Contact\Model\TestFactory $testFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_testFactory = $testFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $post = $this->_testFactory->create();
        $collection = $post->getCollection();
        foreach($collection as $item){
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }
        exit();
        return $this->_pageFactory->create();
    }
}
?>