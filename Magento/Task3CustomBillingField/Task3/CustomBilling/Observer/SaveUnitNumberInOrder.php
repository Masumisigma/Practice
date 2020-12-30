<?php
namespace Task3\CustomBilling\Observer;

class SaveUnitNumberInOrder implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $order = $observer->getEvent()->getOrder();
        $quote = $observer->getEvent()->getQuote();
        if ($quote->getBillingAddress()) {
            $order->getBillingAddress()->setNickName($quote->getBillingAddress()->getExtensionAttributes()->getNickName());
        }
        if (!$quote->isVirtual()) {
            $order->getShippingAddress()->setNickName($quote->getShippingAddress()->getNickName());
        }
        return $this;
    }
}
    