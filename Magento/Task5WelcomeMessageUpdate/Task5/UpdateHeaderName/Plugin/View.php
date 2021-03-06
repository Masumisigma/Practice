<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Task5\UpdateHeaderName\Plugin;

use Magento\Customer\Api\CustomerNameGenerationInterface;
use Magento\Customer\Api\CustomerMetadataInterface;
use Magento\Customer\Api\Data\CustomerInterface;

/**
 * Customer helper for view.
 */
class View
{
    /**
     * @var CustomerMetadataInterface
     */
 //   protected $_customerMetadataService;

    /**
     * Initialize dependencies.
     *
     * @param \Magento\Framework\App\Helper\Context $context
     * @param CustomerMetadataInterface $customerMetadataService
     */
    /*public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        CustomerMetadataInterface $customerMetadataService
    ) {
        $this->_customerMetadataService = $customerMetadataService;
        parent::__construct($context);
    }*/

    /**
     * {@inheritdoc}
     */
    public function aftergetCustomerName(\Magento\Customer\Helper\View $subject,$result,CustomerInterface $customerData)
    {
        /*$name = '';
        $prefixMetadata = $this->_customerMetadataService->getAttributeMetadata('prefix');
        if ($prefixMetadata->isVisible() && $customerData->getPrefix()) {
            $name .= $customerData->getPrefix() . ' ';
        }

        $name .= $customerData->getFirstname();

        $middleNameMetadata = $this->_customerMetadataService->getAttributeMetadata('middlename');
        if ($middleNameMetadata->isVisible() && $customerData->getMiddlename()) {
            $name .= ' ' . $customerData->getMiddlename();
        }

        $name .= ' ' . $customerData->getLastname();

        $suffixMetadata = $this->_customerMetadataService->getAttributeMetadata('suffix');
        if ($suffixMetadata->isVisible() && $customerData->getSuffix()) {
            $name .= ' ' . $customerData->getSuffix();
        }*/
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        //$logger->info( $subject->getTemplate());
        $logger->info("fun");
        return $result. " "."customer";
    }
}
