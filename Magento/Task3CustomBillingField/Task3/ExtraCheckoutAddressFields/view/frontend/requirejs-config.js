var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/set-billing-address': {
                'Task3_ExtraCheckoutAddressFields/js/action/set-billing-address-mixin': true
            },
            'Magento_Checkout/js/action/set-shipping-information': {
                'Task3_ExtraCheckoutAddressFields/js/action/set-shipping-information-mixin': true
            },
            'Magento_Checkout/js/action/create-shipping-address': {
                'Task3_ExtraCheckoutAddressFields/js/action/create-shipping-address-mixin': true
            },
            'Magento_Checkout/js/action/place-order': {
                'Task3_ExtraCheckoutAddressFields/js/action/set-billing-address-mixin': true
            },
            'Magento_Checkout/js/action/create-billing-address': {
                'Task3_ExtraCheckoutAddressFields/js/action/set-billing-address-mixin': true
            }
        }
    }
};