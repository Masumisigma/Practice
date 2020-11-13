<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 29/10/20
 * Time: 9:44 PM
 */
require_once("header.php");
if(!isset($_SESSION['ID'])) {
    ?><script>alert("Sorry ! You are not logged in");
        window.location="index.php";
    </script><?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2>Add Address</h2>
                </div>
                <form  method="post">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="Address" class="form-control" required=""><?php echo $address; ?></textarea>
                    </div>
                    <div class="form-group" >
                        <label>Country</label>
                        <input type="text" name="Country" class="form-control" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group" >
                        <label>State</label>
                        <input type="text" name="State" class="form-control" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="City" class="form-control" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="number" name="Zip" class="form-control" value="<?php echo $salary; ?>">
                    </div>
                    <button type="submit" value="submit" class="btn btn-primary" name="Save">Save</button>
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