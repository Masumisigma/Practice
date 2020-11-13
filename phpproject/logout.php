<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 29/10/20
 * Time: 9:03 PM
 */

session_start();
session_destroy();
header("location:index.php");
exit();
?>