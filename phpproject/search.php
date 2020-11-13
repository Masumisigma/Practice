<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 31/10/20
 * Time: 4:11 PM
 */
//echo "hi";
require_once ("config.php");
//$res=[];
if (isset($_GET['term'])) {


    $query = "SELECT * FROM products WHERE ProductName  LIKE '%".$_GET['term']."%' OR ProductSKU  LIKE '%".$_GET['term']."%' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($user = mysqli_fetch_array($result)) {
            $res[] = $user['ProductName'];
        }
    } else {
        echo "no reocords";
        $res = array();
    }
    //return json res

    echo json_encode($res);
}
/*$query=$_REQUEST['query'];

//echo $query;
if(isset($_REQUEST['query']))
{
  //  echo "in";
    $selectquery = "SELECT * FROM products WHERE ProductName  LIKE '%".$query."%' OR ProductSKU  LIKE '%".$query."%' ";
    $result=$conn->query($selectquery);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
             /*echo " <a href='#' class='list-group-item list-group-item-action border=1'> ".$row['ProductName']."</a>";*/
            /*  echo "<a href='#'class='list-group-item' > ".$row['ProductName']."</a>";
        }
    }
    else
    {
        echo "<p class='list-group-item border-1'>No Record</p>";
    }
}
else
{
echo "failed";
}*/
//return $query;
//exit;




// Generate array with skills data
/*$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data['id'] = $row['id'];
        $data['value'] = $row['skill'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array
echo json_encode($skillData);*/
/*if(isset($_REQUEST['SearchSubmit']))
{
    if(isset($_GET['term']))
    {
        $query = "SELECT * FROM products WHERE ProductName  LIKE '%".$_GET['term']."%' OR ProductSKU  LIKE '%".$_GET['term']."%' ";
        $result = mysqli_query($conn, $query);
    }
}*/

?>
