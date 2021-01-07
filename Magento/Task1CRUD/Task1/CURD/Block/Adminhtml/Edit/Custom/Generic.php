<?php

/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 12/12/20
 * Time: 1:39 AM
 */
namespace Task1\CURD\Block\Adminhtml\Edit\Custom;

use Magento\Backend\Block\Widget\Context;
use Magento\Cms\Api\PageRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class Generic
 */
class Generic
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var PageRepositoryInterface
     */
    protected $pageRepository;

    /**
     * @param Context $context
     * @param PageRepositoryInterface $pageRepository
     */
    public function __construct(
        Context $context,
        PageRepositoryInterface $pageRepository
    ) {
        $this->context = $context;
        $this->pageRepository = $pageRepository;
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $paramsspeedspeed
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
       /* print_r($this->context->getUrlBuilder()->getUrl($route, $params));
        die;*/
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}