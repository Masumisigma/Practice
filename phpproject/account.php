<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 29/10/20
 * Time: 9:20 PM
 */
 require_once("header.php");
 if(!isset($_SESSION['ID'])) {
     ?><script>alert("Sorry ! You are not logged in");
         window.location="index.php";
     </script><?php
 }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header clearfix">
                    <h2 class="pull-left">Address Details</h2>
                    <a href="create.php" class="btn btn-success pull-right">Add New Address</a>
                </div>
                <?php
                $id=$_SESSION['ID'];
               $addid=1;
                $sql = "SELECT * FROM address where UserID='$id'";
                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){

                        echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Address</th>";
                        echo "<th>Country</th>";
                        echo "<th>City</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_array($result)){

                            echo "<tr>";
                            echo "<td>".$addid."</td>";
                            echo "<td>" . $row['Address'] . "</td>";
                            echo "<td>" . $row['Country'] . "</td>";
                            echo "<td>" . $row['City'] . "</td>";
                            echo "<td>";
                            echo "<a href='update.php?id=". $row['Address_ID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                            echo "<a href='delete.php?id=". $row['Address_ID']."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                            echo "</td>";
                            echo "</tr>";
                            $addid++;
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }

                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php require_once("footer.php");?>
