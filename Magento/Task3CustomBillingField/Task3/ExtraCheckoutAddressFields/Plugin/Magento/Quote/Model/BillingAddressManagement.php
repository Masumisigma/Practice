<?php
/**
 * Copyright © Task3 B.V. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Task3\ExtraCheckoutAddressFields\Plugin\Magento\Quote\Model;

use Magento\Quote\Api\Data\AddressInterface;

class BillingAddressManagement
{
    /**
     * @var \Task3\ExtraCheckoutAddressFields\Helper\Data
     */
    protected $helper;

    /**
     * BillingAddressManagement constructor.
     *
     * @param \Task3\ExtraCheckoutAddressFields\Helper\Data $helper
     */
    public function __construct(
        \Task3\ExtraCheckoutAddressFields\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * @param \Magento\Quote\Model\BillingAddressManagement $subject
     * @param $cartId
     * @param AddressInterface $address
     * @param false $useForShipping
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeAssign(
        \Magento\Quote\Model\BillingAddressManagement $subject,
        $cartId,
        AddressInterface $address,
        $useForShipping = false
    ) {
        $extAttributes = $address->getExtensionAttributes();
        if (!empty($extAttributes)) {
            $this->helper->transportFieldsFromExtensionAttributesToObject(
                $extAttributes,
                $address,
                'extra_checkout_billing_address_fields'
            );
        }
    }
}
