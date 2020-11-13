<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 10/11/20
 * Time: 4:30 PM
 */


/*    print_r($_REQUEST['searchresponse']);
$arr=$_REQUEST['searchresponse'];
print_r($arr);*/
/*print_r($_REQUEST['mydata']);
exit;*/
require_once("config.php");
//$searchsuggestionslist=(json_decode($_REQUEST['mydata']));
//print_r($searchsuggestionslist[1]);
/*print_r($_REQUEST['mydata']);*/

//echo $_SESSION['searchquery'];



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
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


        .inline{
            display: inline-block;
            float: right;
            margin: 20px 0px;
        }

        input, button{
            height: 34px;
        }

        .pagination {
            display: inline-block;
        }
        .pagination a {
            font-weight:bold;
            font-size:18px;
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border:1px solid black;
        }
        .pagination a.active {
            background-color: pink;
        }
        .pagination a:hover:not(.active) {
            background-color: skyblue;
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
                    <h2 class="pull-left">Search Results</h2>
                    <a href="index.php" class="btn btn-success pull-right">Back</a>
                </div>
                <?php
                $per_page_record = 2;
                if (isset($_GET["page"])) {
                    $page  = $_GET["page"];
                }
                else {
                    $page=1;
                }
                $start_from = ($page-1) * $per_page_record;

                $searchquery=$_SESSION['searchquery'];
                $sql = "SELECT * FROM products WHERE ProductName  LIKE '%".$_SESSION['searchquery']."%' OR ProductSKU  LIKE '%".$_SESSION['searchquery']."%' LIMIT $start_from, $per_page_record";
                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Product SKU</th>";
                        echo "<th>Product Name</th>";
                        echo "<th>Product Price</th>";
                        echo "<th>Product Weight</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>" . $row['ProductSKU'] . "</td>";
                            echo "<td>" . $row['ProductName'] . "</td>";
                            echo "<td>" . $row['ProductPrice'] . "</td>";
                            echo "<td>" . $row['ProductWeight'] . "</td>";
                            echo "</tr>";
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
                <div class="pagination">
                    <?php
                    $query = "SELECT COUNT(*) FROM products";
                    //echo $query;
                    $rs_result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_row($rs_result);
                    $total_records = $row[0];
                   // echo $total_records;

                    echo "</br>";
                    // Number of pages required.
                    $total_pages = ceil($total_records / $per_page_record);
                    $pagLink = "";

                    if($page>=2){
                        echo "<a href='searchresults.php?page=".($page-1)."'>  Prev </a>";
                    }

                    for ($i=1; $i<=$total_pages; $i++) {
                        if ($i == $page) {
                            $pagLink .= "<a class = 'active' href='searchresults.php?page="
                                .$i."'>".$i." </a>";
                        }
                        else  {
                            $pagLink .= "<a href='searchresults.php?page=".$i."'>   
                                                ".$i." </a>";
                        }
                    };
                    echo $pagLink;

                    if($page<$total_pages){
                        echo "<a href='searchresults.php?page=".($page+1)."'>  Next </a>";
                    }

                    ?>
                </div>


                <div class="inline">
                    <input id="page" type="number" min="1" max="<?php echo $total_pages?>"
                           placeholder="<?php echo $page."/".$total_pages; ?>" required>
                    <button onClick="go2Page();">Go</button>
                </div>
            </div>
        </div>
        <script>
            function go2Page()
            {
                var page = document.getElementById("page").value;
                page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));
                window.location.href = 'searchresults.php?page='+page;
            }
        </script>
    </div>
        </div>
    </div>
</div>
</body>
</html>


