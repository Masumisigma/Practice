<?php
/**
 * Copyright © Task3 B.V. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Task3\ExtraCheckoutAddressFields\Plugin\Magento\Quote\Model;

use Task3\ExtraCheckoutAddressFields\Helper\Data;
use Magento\Quote\Api\Data\AddressInterface;

class ShippingAddressManagement
{
    /**
     * @var Data
     */
    protected $helper;

    /**
     * ShippingAddressManagement constructor.
     *
     * @param Data $helper
     */
    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * @param \Magento\Quote\Model\ShippingAddressManagement $subject
     * @param $cartId
     * @param AddressInterface $address
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeAssign(
        \Magento\Quote\Model\ShippingAddressManagement $subject,
        $cartId,
        AddressInterface $address
    ) {
        $extAttributes = $address->getExtensionAttributes();

        if (!empty($extAttributes)) {
            $this->helper->transportFieldsFromExtensionAttributesToObject(
                $extAttributes,
                $address,
                'extra_checkout_shipping_address_fields'
            );
        }
    }
}
