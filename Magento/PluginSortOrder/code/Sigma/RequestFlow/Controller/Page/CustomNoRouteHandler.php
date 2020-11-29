<?php
namespace Sigma\RequestFlow\Controller\page;



class CustomNoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $request->setRouteName('customcms')->setControllerName('page')->setActionName('customnoroute');

        return true;

    }


}
?>
