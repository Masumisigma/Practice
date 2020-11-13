<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 29/10/20
 * Time: 11:22 PM
 */
require_once("header.php");
if(!isset($_SESSION['ID'])) {
    ?><script>alert("Sorry ! You are not logged in");
        window.location="index.php";
    </script><?php
}
$select="select * from address WHERE Address_ID=$_REQUEST[id]";
//echo $select;
if($result=mysqli_query($conn,$select))
{
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $addressid=$row['Address_ID'];
           $address=$row['Address'];
            $country=$row['Country'];
            $state=$row['State'];
            $city=$row['City'];
            $zip=$row['Zip'];
        }
    }
}
if(isset($_REQUEST['Update']))
{
    $data=array('Address'=>$_REQUEST['Address'],'Country'=>$_REQUEST['Country'],'State'=>$_REQUEST['State'],'City'=>$_REQUEST['City'],'Zip'=>$_REQUEST['Zip']);
  //  print_r($data);
    $updatequery="update address set Address='$data[Address]',Country='$data[Country]',State='$data[State]',City='$data[City]',Zip='$data[Zip]' where Address_ID='$addressid'";
 //  echo $updatequery;
    if($conn->query($updatequery))
    {
        ?><script>alert("Data Updated");
        location.href="account.php";

    </script><?php
    }
    else
    {
        ?><script>alert("Not Updated");</script><?php
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Update Record</h2>
                </div>
                <form method="post">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="Address" class="form-control" required=""><?php echo $address; ?></textarea>
                    </div>
                    <div class="form-group" >
                        <label>Country</label>
                        <input type="text" name="Country" class="form-control" value="<?php echo $country; ?>">
                    </div>
                    <div class="form-group" >
                        <label>State</label>
                        <input type="text" name="State" class="form-control" value="<?php echo $state; ?>">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="City" class="form-control" value="<?php echo $city; ?>">
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="number" name="Zip" class="form-control" value="<?php echo $zip; ?>">
                    </div>
                    <button type="submit" value="submit" class="btn btn-primary" name="Update">Update</button>
                    <!--<input type="submit" class="btn btn-primary" value="Submit">-->
                    <a href="account.php" class="btn btn-default">Cancel</a>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php require_once("footer.php");?>
