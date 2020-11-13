<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 28/10/20
 * Time: 10:24 AM
 */
session_start();
$conn = mysqli_connect("localhost","admin","Sigma@123","phpproject");
if(mysqli_connect_error())
{
    echo "failed to connect".mysqli_connect_error();
}
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';*/
if(isset($_REQUEST['Register']) && $_SERVER["REQUEST_METHOD"] == "POST")
{

$error_message = $firstname = $lastname = $emailaddress = $phone = $password= $confirmpassword = $doc ="";

$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$emailaddress = $_POST['Email'];
$phone = $_POST['Phone'];
$password = $_POST['Password'];
$confirmpassword=$_POST['ConfirmPassword'];
$doc=$_POST['IdentityDocument'];

if(empty($firstname) || $firstname == ""){
    ?><script>alert("First Name is required!");
        window.location.href="index.php";
    </script>
    <?php
//$error_message = "First Name is required!";
}
elseif( !preg_match("/^[a-zA-Z ]*$/",$firstname) ){
    ?><script>alert("Only letters and white space allowed!");
        window.location.href="index.php";
    </script>
    <?php
    //$error_message = "Only letters and white space allowed!";
}
elseif(empty($lastname) || $lastname == ""){
    ?><script>alert("Last Name is required!");
        window.location.href="index.php";
    </script>
    <?php

    //$error_message = "Last Name is required!";
}
elseif( !preg_match("/^[a-zA-Z ]*$/",$lastname) ){
    ?><script>alert("Only letters and white space allowed!");
        window.location.href="index.php";
    </script>
    <?php
    // $error_message = "Only letters and white space allowed!";
}
elseif(empty($emailaddress) || $emailaddress == ""){
    ?><script>alert("Email address is required!");
        window.location.href="index.php";
    </script>
    <?php

    //$error_message = "Email address is required!";
}
elseif(!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)){
    ?><script>alert("Invalid email format!");
        window.location.href="index.php";
    </script>
    <?php

    // $error_message = "Invalid email format!";
}
elseif(empty($phone) || $phone == ""){
    ?><script>alert("Phone Number is required!");
        window.location.href="index.php";
    </script>
    <?php

    // $error_message = "Phone Number is required!";
}
elseif(empty($password) || $password == ""){
    ?><script>alert("Password is required!");
        window.location.href="index.php";
    </script>
    <?php
//$error_message = "Password is required!";
}
elseif(empty($confirmpassword) || $confirmpassword == ""){
    ?><script>alert("Confirm Password is required!");
        window.location.href="index.php";
    </script>
    <?php

    //$error_message = "Confirm Password is required!";
}
elseif($password != $confirmpassword){
?><script>alert("Password does not match !");
    window.location.href="index.php";
</script>
<?php

// $error_message = "Password does not match !";
}
/*    elseif(empty($doc) || $doc == ""){
*/?><!--<script>alert("Identity verfication document is required");
    window.location.href="index.php";
</script>
--><?php
/*
       // $error_message = "Identity verfication document is required";
    }
    else{


    }*/

}

if(isset($_REQUEST['Register']))
{

/* $firstname = $_POST['FirstName'];
 $lastname = $_POST['LastName'];
 $emailaddress = $_POST['Email'];
 $phone = $_POST['Phone'];
 $password = $_POST['Password'];
 $confirmpassword=$_POST['ConfirmPassword'];
 $doc=$_POST['IdentityDocument'];*/
/*if($_REQUEST['FirstName']!=''&& $_REQUEST['LastName']!='' && $_REQUEST['Email']!='' && $_REQUEST['Phone']!='' && $_REQUEST['Password']!='' && $_REQUEST['ConfirmPassword']!='' && $_REQUEST['IdentityDocument']!='' )
{*/
/* */?><!--<script>alert("PPPPPP");</script>--><?php
// print_r($_FILES);
$tmp_file=$_FILES['IdentityDocument']['tmp_name'];
//echo $tmp_file;
$file_name=$_FILES['IdentityDocument']['name'];
//echo  $file_name;
$target_file="Uploads/$file_name";
if (!file_exists($target_file)) {


    if (copy($tmp_file, $target_file)) {
        $doc = $file_name;
    } else {
        echo "File Upload failed";
    }
}
else
{
    echo "<script>alert('File is already exists with this name ! Please Upload Again');</script>";
    //exit;
    echo "<script>window.location.href='index.php';</script>";
}
//exit;
$data=array('firstname'=>$_REQUEST['FirstName'],'lastname'=>$_REQUEST['LastName'],'emailaddress'=>$_REQUEST['Email'],'phone'=>$_REQUEST['Phone'],'password'=>md5($_REQUEST['Password']),'confirmpassword'=>$_REQUEST['ConfirmPassword'],'doc'=>$doc);

$insertquery = "insert into users(UserFirstName,UserLastName,UserEmail,UserPhone,UserPassword,UserIP) values('$data[firstname]','$data[lastname]','$data[emailaddress]','$data[phone]','$data[password]','$data[doc]');";
//echo $insertquery;
if($conn->query($insertquery))
{
    ?> <script>alert("Register Sucessfully !");</script><?php

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "masumi.upadhyay@sigmainfo.net";
    $to=$data['emailaddress'];
    // echo $to;;
    $subject = "Register Successful";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers))
    {
        ?><script>alert("Email has been sent");</script><?php
        // echo "The email message was sent.";
    }
    else
    {
        ?><script>alert("failed");</script><?php
        //echo "failed";
    }
    /* $mail = new PHPMailer(true);

     try {
         $mail->SMTPDebug = 2;
         $mail->isSMTP();
         $mail->Host       = 'smtp.gfg.com;';
         $mail->SMTPAuth   = true;
         $mail->Username   = 'user@gfg.com';
         $mail->Password   = 'password';
         $mail->SMTPSecure = 'tls';
         $mail->Port       = 587;

         $mail->setFrom('from@gfg.com', 'Name');
         $mail->addAddress('receiver1@gfg.com');
         $mail->addAddress('receiver2@gfg.com', 'Name');

         $mail->isHTML(true);
         $mail->Subject = 'Subject';
         $mail->Body    = 'HTML message body in <b>bold</b> ';
         $mail->AltBody = 'Body in plain text for non-HTML mail clients';
         $mail->send();
         echo "Mail has been sent successfully!";
     } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }*/

}
else
{
    // echo("Errorcode: " . $conn -> errno);
    if($conn->errno==1062)
    {
        echo "<script>alert('Already Registered With This Email Id Or Phone No');</script>";
    }

    ?> <script>alert(" Register Failed :( ");</script><?php
}
//echo "<pre>";
//  print_r($data);
// }

}
if(isset($_REQUEST['Login']))
{

    $username=$_REQUEST['Name'];
    $password=md5($_REQUEST['Password']);
    // echo $username .$password;
    $selectquery="select * from users where (UserEmail ='$username' OR UserPhone = '$username') AND UserPassword ='$password';";
    //echo $selectquery;
    $result=$conn->query($selectquery);
    if($result->num_rows==1)
    {
        while($row=$result->fetch_assoc())
        {
            ?><script>alert("Login Sucessfully ! ")</script><?php
            $_SESSION['ID']=$row['UserID'];
            $_SESSION['Name'] = $row['UserFirstName'] ."  ". $row['UserLastName'];
            /* echo $_SESSION['ID'];
             echo "<br>";
             echo  $_SESSION['Name'];*/
            // print_r($row);
        }
    }
    else
    {
        ?>
        <script>
            alert("Please Enter Correct Login Details");
        </script>
        <?php
    }

}

if(isset($_REQUEST['Save']))
{
    $data=array('Address'=>$_REQUEST['Address'],'Country'=>$_REQUEST['Country'],'State'=>$_REQUEST['State'],'City'=>$_REQUEST['City'],'Zip'=>$_REQUEST['Zip'],'UserID'=>$_SESSION['ID']);
    // echo "<pre>";
    print_r($data);
    $insertquery="insert into address(Address,Country,State,City,Zip,UserID) values('$data[Address]','$data[Country]','$data[State]','$data[City]','$data[Zip]','$data[UserID]')";
    //echo $insertquery;
    if($conn->query($insertquery))
    {
        ?><script>alert("Address Added");
        location.href="account.php";

    </script><?php
    }
    else
    {
        ?><script>alert("Failed to insert data");</script><?php
    }
}
if(isset($_REQUEST['Update']))
{
}
if(isset($_REQUEST['EmailSubscription']))
{
    if(!empty($_REQUEST['email']))
    {
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "masumi.upadhyay@sigmainfo.net";
        $to=$_REQUEST['email'];
        $subject = "News Subscription";
        $message = "You have Subscibed News Subscription";
        $headers = "From:" . $from;

        // echo $to;
        if(mail($to,$subject,$message, $headers))
        {
            ?><script>alert("You have successfully subscribed newsletter");</script><?php

            // echo "The email message was sent.";
        }
        else {
            ?>
            <script>alert("Failed");</script><?php
            // echo "failed";
        }



    }



}
if(isset($_REQUEST['SearchSubmit']))
{
    $_SESSION['searchquery']=$_POST['SearchInput'];
    // echo $_SESSION['searchquery'];
    ?><script>window.location.href = "searchresults.php";</script><?php

}

?>

