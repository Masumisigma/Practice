<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 21/11/20
 * Time: 4:35 PM
 */
namespace Learning\FirstModule\Controller\Index;
use Magento\Catalog\Model\ProductFactory;

class Test extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $productFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
         ProductFactory $productFactory)
    {
        $this->_pageFactory = $pageFactory;
        $this->productFactory = $productFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        echo "Hello World";
        $modelId=1;
        $product=$this->productFactory->create()->load($modelId);
        $product->setName("masu");
        $productName= $product->getName();
        //echo $productName;





       // exit;
    }
}
