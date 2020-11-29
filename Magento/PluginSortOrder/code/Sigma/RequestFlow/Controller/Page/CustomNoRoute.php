<?php
namespace Sigma\RequestFlow\Controller\Page;
use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\RequestInterface;
class CustomNoRoute extends Action
{

    function execute()
    {
        echo "Testing No Router Page";
    }

}
?>