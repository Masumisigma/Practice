<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 30/10/20
 * Time: 1:02 AM
 */
require_once("header.php");
if(!isset($_SESSION['ID'])) {
    ?><script>alert("Sorry ! You are not logged in");
        window.location="index.php";
    </script><?php
}
$deletequery="delete from address where Address_ID='$_REQUEST[id]'";
//echo $deletequery;
if($conn->query($deletequery))
{
    ?><script>alert("Deleted Sucessfully");
    location.href="account.php";

      </script><?php
}
else
{
    ?><script>alert("Delete failed");</script><?php
}
require_once("footer.php");
?>

