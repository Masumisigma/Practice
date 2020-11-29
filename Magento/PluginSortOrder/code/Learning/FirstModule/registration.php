<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 21/11/20
 * Time: 1:43 PM
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    Magento\Framework\Component\ComponentRegistrar::MODULE,      //type
    'Learning_FirstModule',                                      //name
    __DIR__                                                      //path
);
?>