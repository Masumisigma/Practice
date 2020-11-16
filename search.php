<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 31/10/20
 * Time: 4:11 PM
 */
//echo "hi";
//require_once ("config.php");
$query=$_REQUEST['query'];

echo $query;
if(isset($_REQUEST['query']))
{
    echo "in";
   // $query = "SELECT * FROM products WHERE ProductName LIKE '%".$query."%' ";
}
else
{
echo "failed";
}
return $query;
exit;




// Generate array with skills data
$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data['id'] = $row['id'];
        $data['value'] = $row['skill'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array
echo json_encode($skillData);
?>