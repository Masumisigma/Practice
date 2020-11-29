<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 28/11/20
 * Time: 6:04 PM
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    Magento\Framework\Component\ComponentRegistrar::MODULE,      //type
    'Learning_Plugin',                                      //name
    __DIR__                                                      //path
);
?>