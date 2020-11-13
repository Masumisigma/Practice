
<?php
/**
 * * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 27/10/20
 * Time: 11:47 AM
 */
require_once("config.php");
/*if(isset($_REQUEST['Register']) && $_SERVER["REQUEST_METHOD"] == "POST") {

 $error_message = $firstname = $lastname = $emailaddress = $phone = $password= $confirmpassword = $doc ="";

    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $emailaddress = $_POST['Email'];
    $phone = $_POST['Phone'];
    $password = $_POST['Password'];
    $confirmpassword=$_POST['ConfirmPassword'];
    $doc=$_POST['IdentityDocument'];

    if(empty($firstname) || $firstname == ""){
        $error_message = "First Name is required!";
    }
    elseif( !preg_match("/^[a-zA-Z ]*$/",$firstname) ){
        $error_message = "Only letters and white space allowed!";
    }
    elseif(empty($lastname) || $lastname == ""){
        $error_message = "Last Name is required!";
    }
    elseif( !preg_match("/^[a-zA-Z ]*$/",$lastname) ){
        $error_message = "Only letters and white space allowed!";
    }
    elseif(empty($emailaddress) || $emailaddress == ""){
        $error_message = "Email address is required!";
    }
    elseif(!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)){
        $error_message = "Invalid email format!";
    }
    elseif(empty($phone) || $phone == ""){
        $error_message = "Phone Number is required!";
    }
    elseif(empty($password) || $password == ""){
        $error_message = "Password is required!";
    }
    elseif(empty($confirmpassword) || $confirmpassword == ""){
        $error_message = "Confirm Password is required!";
    }
    elseif($password != $confirmpassword){
        $error_message = "Password does not match !";
    }
    elseif(empty($doc) || $doc == ""){
        $error_message = "Identity verfication document is required";
    }
    else{


    }

}*/
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="js/script.js"></script>

    <!----------------------------------------------------------------------------------------------------------------->

         <!-- <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">-->
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">


    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <!--<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>-->

    <script>
   jq  = jQuery.noConflict( true );
   /* jq(document).ready(function () {
         jq("#SearchInput").keyup(function () {
             var search=jq(this).val();
             //console.log(search);
             if(search.length>=3)
             {
               //  window.location.href="search.php?query="+search+"";
                // alert("in");

                /!* $query = "SELECT * FROM products WHERE ProductName LIKE '%".$search."%' ";
                 echo $query;*!/



                // alert("more 3");
                 jq.ajax({
                     url:'http://phpproject.masumi.co/search.php',
                     type:'post',
                     data: { query:search },
                     success:function (response) {
                         console.log(response);
                         jq('#show-list').html(response);

                     }
                 });
             }

         });

     });*/
       jq(function() {
          //  alert("fun in");
            jq( "#SearchInput" ).autocomplete({
                         source:"search.php",
                         minLength:3,
                         select:function (event,ui) {

                         console.log(ui.item.value);

                         }
                     /*    response:function (event,ui) {
                             var responsedata = ui.content;
                             //console.log(responsedata);
                            jq("#SearchForm").submit(function (event) {
                              //  alert("het");
                                event.preventDefault();
                                /!*  var res=JSON.parse(responsedata);*!/
                                var res = JSON.stringify(responsedata);
                                console.log(res);
                                //var param=jq.param(responsedata);
                                // console.log("searchresults.php?mydata=" + jq.param(responsedata)  );
                                /!* window.location.href="http://phpproject.masumi.co/searchresults.php?mydata="+ res + "";*!/

                                /!*jq.ajax({
                                 url:"http://phpproject.masumi.co/searchresults.php",
                                 method:'post',
                                 data:{ searchresponse:responsedata },
                                 success:function (res) {
                                 console.log(res);

                                 }

                                 })
                                 *!/


                                /!*response:function (res) {
                                 console.log(res);
                                 //jq("#SearchForm").submit(function (event) {
                                 // alert(ui.item.value);
                                 // alert(event);

                                 // });
                                 }*!/
                            });
                         }*/

                    });
         /*  $('#SearchInput').change(function () {
               alert($('#SearchInput').val());
           });*/


            });
     /* $(document).ready(function () {
          alert("hhhhhh");
          console.log("1");
          $('#SearchInput').autocomplete({
              source:function (request,response) {
                  $.ajax({
                          url:'search.php',
                          type:'post',
                          dataType:'json',
                          data:
                              {
                                  search=request.term
                      },
                      sucess:function (data) {
                      response(data);

                  }
              })

              }
          })

      })*/
      /*jq(function() {
          alert("ufn");
          jq("#SearchInput").autocomplete({
              //alert("innn");
          source: "search.php",
              select: function( event, ui ) {
              event.preventDefault();
              $("#SearchInput").val(ui.item.id);
          }
      });
      });*/
    </script>


    <!-------------------------------------------------------------------------------------------------------------------->
    <!--<script src="https://code.jquery.com/jquery-1.5.min.js" integrity="sha256-IpJ49qnBwn/FW+xQ8GVI/mTCYp9Z9GLVDKwo5lu5OoM=" crossorigin="anonymous"></script>-->

    <!-- //Meta tag Keywords -->
    <!--------------------------------------------------------------------SEARCH---------------------------------------
    <!-- jQuery library -->
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->

    <!-- jQuery UI library -->
    <!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>-->
    <!-- Script -->
   <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="js/jquery-3.5.1.min.js"></script>
     <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
   <!-- <script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>-->
    <!-- jQuery UI -->
    <!--<script src="https://a/*  $(function() {
            alert("fun in");
            var availableTutorials = [
                "ActionScript",
                "Bootstrap",
                "C",
                "C++",
                "Ecommerce",
                "Jquery",
                "Groovy",
                "Java",
                "JavaScript",
                "Lua",,
                "Perl",
                "Ruby",
                "Scala",
                "Swing",
                "XHTML"
            ];
            $( "#SearchInput" ).autocomplete({
                minLength:2,
                delay:500,
                source: availableTutorials
            });
        });*/jax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>-->
 <!------------------------------------------------------------------------------------------------------------------>
    <!-- Custom-Files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Main css -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up-box -->
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <!-- //Custom-Files -->

    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">
    <script>
    <!-- //web fonts -->
        /*$(function() {
        alert("ufn");
        $("#SearchInput").autocomplete({
        alert("innn");
        source: "search.php",
        select: function( event, ui ) {
        event.preventDefault();
        $("#SearchInput").val(ui.item.id);
        }
        });
        });*/
    </script>
    <!--<script>
$(document).ready(function () {
alert("hhhhhh");
console.log("1");
$('#SearchInput').autocomplete({
source:function (request,response) {
$.ajax({
url:'search.php',
type:'post',;
dataType:'json'
data:
{
search=request.term
},
sucess:function (data) {
response(data);

}
})

}
})

})
</script>-->
<?php
/*
if(isset($_REQUEST['SearchSubmit'])) {
    $_SESSION['searchquery']=$_POST['SearchInput'];
   // echo $_SESSION['searchquery'];
    */?><!--<script>window.location.href = "searchresults.php";</script>--><?php
/*}
*/?>
</head>

<body>
<!-- top-header -->
<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top">
                <p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
                    <i class="fas fa-shopping-cart ml-1"></i>
                </p>
            </div>
            <div class="col-lg-8 header-right mt-lg-0 mt-2">
                <!-- header lists -->
                <ul>
                    <li class="text-center border-right text-white">
                        <a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
                            <i class="fas fa-map-marker mr-2"></i>Select Location</a>
                    </li>
                    <li class="text-center border-right text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                            <i class="fas fa-truck mr-2"></i>Track Order</a>
                    </li>
                    <li class="text-center border-right text-white">
                        <i class="fas fa-phone mr-2"></i> 001 234 5678
                    </li>
                   <?php
                   if(isset($_SESSION['Name']))
                   {
                       ?>
                    <li class="text-center border-right text-white">
                        <a href="account.php" class="text-white"> <?php echo "Welcome"."  ".$_SESSION['Name'];
                       ?>
                       </a>
                       <!-- <script>
                            location.href="index.php?ID=<?php /*echo $_SESSION['ID']*/?>"
                        </script>-->
                    </li>
                    <li class="text-center text-white">
                        <a href="logout.php" class="text-white"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>

                 <?php  }
                   else
                   {
                      /* echo "you are in else";*/
                   ?>
                    <li class="text-center border-right text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                            <i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
                    </li>
                    <li class="text-center text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                            <i class="fas fa-sign-out-alt mr-2"></i>Register </a>
                    </li>
                    <?php } ?>
                </ul>
                <!-- //header lists -->
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal(select-location) -->
<div id="small-dialog1" class="mfp-hide">
    <div class="select-city">
        <h3>
            <i class="fas fa-map-marker"></i> Please Select Your Location</h3>
        <select class="list_of_cities">
            <optgroup label="Popular Cities">
                <option selected style="display:none;color:#eee;">Select City</option>
                <option>Birmingham</option>
                <option>Anchorage</option>
                <option>Phoenix</option>
                <option>Little Rock</option>
                <option>Los Angeles</option>
                <option>Denver</option>
                <option>Bridgeport</option>
                <option>Wilmington</option>
                <option>Jacksonville</option>
                <option>Atlanta</option>
                <option>Honolulu</option>
                <option>Boise</option>
                <option>Chicago</option>
                <option>Indianapolis</option>
            </optgroup>
            <optgroup label="Alabama">
                <option>Birmingham</option>
                <option>Montgomery</option>
                <option>Mobile</option>
                <option>Huntsville</option>
                <option>Tuscaloosa</option>
            </optgroup>
            <optgroup label="Alaska">
                <option>Anchorage</option>
                <option>Fairbanks</option>
                <option>Juneau</option>
                <option>Sitka</option>
                <option>Ketchikan</option>
            </optgroup>
            <optgroup label="Arizona">
                <option>Phoenix</option>
                <option>Tucson</option>
                <option>Mesa</option>
                <option>Chandler</option>
                <option>Glendale</option>
            </optgroup>
            <optgroup label="Arkansas">
                <option>Little Rock</option>
                <option>Fort Smith</option>
                <option>Fayetteville</option>
                <option>Springdale</option>
                <option>Jonesboro</option>
            </optgroup>
            <optgroup label="California">
                <option>Los Angeles</option>
                <option>San Diego</option>
                <option>San Jose</option>
                <option>San Francisco</option>
                <option>Fresno</option>
            </optgroup>
            <optgroup label="Colorado">
                <option>Denver</option>
                <option>Colorado</option>
                <option>Aurora</option>
                <option>Fort Collins</option>
                <option>Lakewood</option>
            </optgroup>
            <optgroup label="Connecticut">
                <option>Bridgeport</option>
                <option>New Haven</option>
                <option>Hartford</option>
                <option>Stamford</option>
                <option>Waterbury</option>
            </optgroup>
            <optgroup label="Delaware">
                <option>Wilmington</option>
                <option>Dover</option>
                <option>Newark</option>
                <option>Bear</option>
                <option>Middletown</option>
            </optgroup>
            <optgroup label="Florida">
                <option>Jacksonville</option>
                <option>Miami</option>
                <option>Tampa</option>
                <option>St. Petersburg</option>
                <option>Orlando</option>
            </optgroup>
            <optgroup label="Georgia">
                <option>Atlanta</option>
                <option>Augusta</option>
                <option>Columbus</option>
                <option>Savannah</option>
                <option>Athens</option>
            </optgroup>
            <optgroup label="Hawaii">
                <option>Honolulu</option>
                <option>Pearl City</option>
                <option>Hilo</option>
                <option>Kailua</option>
                <option>Waipahu</option>
            </optgroup>
            <optgroup label="Idaho">
                <option>Boise</option>
                <option>Nampa</option>
                <option>Meridian</option>
                <option>Idaho Falls</option>
                <option>Pocatello</option>
            </optgroup>
            <optgroup label="Illinois">
                <option>Chicago</option>
                <option>Aurora</option>
                <option>Rockford</option>
                <option>Joliet</option>
                <option>Naperville</option>
            </optgroup>
            <optgroup label="Indiana">
                <option>Indianapolis</option>
                <option>Fort Wayne</option>
                <option>Evansville</option>
                <option>South Bend</option>
                <option>Hammond</option>
            </optgroup>
            <optgroup label="Iowa">
                <option>Des Moines</option>
                <option>Cedar Rapids</option>
                <option>Davenport</option>
                <option>Sioux City</option>
                <option>Waterloo</option>
            </optgroup>
            <optgroup label="Kansas">
                <option>Wichita</option>
                <option>Overland Park</option>
                <option>Kansas City</option>
                <option>Topeka</option>
                <option>Olathe </option>
            </optgroup>
            <optgroup label="Kentucky">
                <option>Louisville</option>
                <option>Lexington</option>
                <option>Bowling Green</option>
                <option>Owensboro</option>
                <option>Covington</option>
            </optgroup>
            <optgroup label="Louisiana">
                <option>New Orleans</option>
                <option>Baton Rouge</option>
                <option>Shreveport</option>
                <option>Metairie</option>
                <option>Lafayette</option>
            </optgroup>
            <optgroup label="Maine">
                <option>Portland</option>
                <option>Lewiston</option>
                <option>Bangor</option>
                <option>South Portland</option>
                <option>Auburn</option>
            </optgroup>
            <optgroup label="Maryland">
                <option>Baltimore</option>
                <option>Frederick</option>
                <option>Rockville</option>
                <option>Gaithersburg</option>
                <option>Bowie</option>
            </optgroup>
            <optgroup label="Massachusetts">
                <option>Boston</option>
                <option>Worcester</option>
                <option>Springfield</option>
                <option>Lowell</option>
                <option>Cambridge</option>
            </optgroup>
            <optgroup label="Michigan">
                <option>Detroit</option>
                <option>Grand Rapids</option>
                <option>Warren</option>
                <option>Sterling Heights</option>
                <option>Lansing</option>
            </optgroup>
            <optgroup label="Minnesota">
                <option>Minneapolis</option>
                <option>St. Paul</option>
                <option>Rochester</option>
                <option>Duluth</option>
                <option>Bloomington</option>
            </optgroup>
            <optgroup label="Mississippi">
                <option>Jackson</option>
                <option>Gulfport</option>
                <option>Southaven</option>
                <option>Hattiesburg</option>
                <option>Biloxi</option>
            </optgroup>
            <optgroup label="Missouri">
                <option>Kansas City</option>
                <option>St. Louis</option>
                <option>Springfield</option>
                <option>Independence</option>
                <option>Columbia</option>
            </optgroup>
            <optgroup label="Montana">
                <option>Billings</option>
                <option>Missoula</option>
                <option>Great Falls</option>
                <option>Bozeman</option>
                <option>Butte-Silver Bow</option>
            </optgroup>
            <optgroup label="Nebraska">
                <option>Omaha</option>
                <option>Lincoln</option>
                <option>Bellevue</option>
                <option>Grand Island</option>
                <option>Kearney</option>
            </optgroup>
            <optgroup label="Nevada">
                <option>Las Vegas</option>
                <option>Henderson</option>
                <option>North Las Vegas</option>
                <option>Reno</option>
                <option>Sunrise Manor</option>
            </optgroup>
            <optgroup label="New Hampshire">
                <option>Manchesters</option>
                <option>Nashua</option>
                <option>Concord</option>
                <option>Dover</option>
                <option>Rochester</option>
            </optgroup>
            <optgroup label="New Jersey">
                <option>Newark</option>
                <option>Jersey City</option>
                <option>Paterson</option>
                <option>Elizabeth</option>
                <option>Edison</option>
            </optgroup>
            <optgroup label="New Mexico">
                <option>Albuquerque</option>
                <option>Las Cruces</option>
                <option>Rio Rancho</option>
                <option>Santa Fe</option>
                <option>Roswell</option>
            </optgroup>
            <optgroup label="New York">
                <option>New York</option>
                <option>Buffalo</option>
                <option>Rochester</option>
                <option>Yonkers</option>
                <option>Syracuse</option>
            </optgroup>
            <optgroup label="North Carolina">
                <option>Charlotte</option>
                <option>Raleigh</option>
                <option>Greensboro</option>
                <option>Winston-Salem</option>
                <option>Durham</option>
            </optgroup>
            <optgroup label="North Dakota">
                <option>Fargo</option>
                <option>Bismarck</option>
                <option>Grand Forks</option>
                <option>Minot</option>
                <option>West Fargo</option>
            </optgroup>
            <optgroup label="Ohio">
                <option>Columbus</option>
                <option>Cleveland</option>
                <option>Cincinnati</option>
                <option>Toledo</option>
                <option>Akron</option>
            </optgroup>
            <optgroup label="Oklahoma">
                <option>Oklahoma City</option>
                <option>Tulsa</option>
                <option>Norman</option>
                <option>Broken Arrow</option>
                <option>Lawton</option>
            </optgroup>
            <optgroup label="Oregon">
                <option>Portland</option>
                <option>Eugene</option>
                <option>Salem</option>
                <option>Gresham</option>
                <option>Hillsboro</option>
            </optgroup>
            <optgroup label="Pennsylvania">
                <option>Philadelphia</option>
                <option>Pittsburgh</option>
                <option>Allentown</option>
                <option>Erie</option>
                <option>Reading</option>
            </optgroup>
            <optgroup label="Rhode Island">
                <option>Providence</option>
                <option>Warwick</option>
                <option>Cranston</option>
                <option>Pawtucket</option>
                <option>East Providence</option>
            </optgroup>
            <optgroup label="South Carolina">
                <option>Columbia</option>
                <option>Charleston</option>
                <option>North Charleston</option>
                <option>Mount Pleasant</option>
                <option>Rock Hill</option>
            </optgroup>
            <optgroup label="South Dakota">
                <option>Sioux Falls</option>
                <option>Rapid City</option>
                <option>Aberdeen</option>
                <option>Brookings</option>
                <option>Watertown</option>
            </optgroup>
            <optgroup label="Tennessee">
                <option>Memphis</option>
                <option>Nashville</option>
                <option>Knoxville</option>
                <option>Chattanooga</option>
                <option>Clarksville</option>
            </optgroup>
            <optgroup label="Texas">
                <option>Houston</option>
                <option>San Antonio</option>
                <option>Dallas</option>
                <option>Austin</option>
                <option>Fort Worth</option>
            </optgroup>
            <optgroup label="Utah">
                <option>Salt Lake City</option>
                <option>West Valley City</option>
                <option>Provo</option>
                <option>West Jordan</option>
                <option>Orem</option>
            </optgroup>
            <optgroup label="Vermont">
                <option>Burlington</option>
                <option>Essex</option>
                <option>South Burlington</option>
                <option>Colchester</option>
                <option>Rutland</option>
            </optgroup>
            <optgroup label="Virginia">
                <option>Virginia Beach</option>
                <option>Norfolk</option>
                <option>Chesapeake</option>
                <option>Arlington</option>
                <option>Richmond</option>
            </optgroup>
            <optgroup label="Washington">
                <option>Seattle</option>
                <option>Spokane</option>
                <option>Tacoma</option>
                <option>Vancouver</option>
                <option>Bellevue</option>
            </optgroup>
            <optgroup label="West Virginia">
                <option>Charleston</option>
                <option>Huntington</option>
                <option>Parkersburg</option>
                <option>Morgantown</option>
                <option>Wheeling</option>
            </optgroup>
            <optgroup label="Wisconsin">
                <option>Milwaukee</option>
                <option>Madison</option>
                <option>Green Bay</option>
                <option>Kenosha</option>
                <option>Racine</option>
            </optgroup>
            <optgroup label="Wyoming">
                <option>Cheyenne</option>
                <option>Casper</option>
                <option>Laramie</option>
                <option>Gillette</option>
                <option>Rock Springs</option>
            </optgroup>
        </select>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //shop locator (popup) -->

<!-- modals -->
<!-- log in -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Log In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" >
                    <div class="form-group">
                        <label class="col-form-label">Username</label>
                        <input type="text" class="form-control" placeholder=" " name="Name" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="Password" required="">
                    </div>
                    <div class="right-w3l">
                        <button type="submit" value="submit" name="Login" onclick="return login();" class="form-control" >Login</button>
                    </div>
                    <div class="sub-w3l">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                            <label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
                        </div>
                    </div>
                    <p class="text-center dont-do mt-3">Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#exampleModal2">
                            Register Now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- register -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                   <!-- <div id="formvalidation"></div>-->
                    <p id="formvalidation"></p>
                   <!-- <span class="error">* <?php /*echo $error_message; */?></span>-->
                    <div class="form-group">
                        <label class="col-form-label">First Name</label>
                        <input type="text" class="form-control" placeholder=" " name="FirstName" id="FirstNameID" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder=" " name="LastName" id="LastNameID" required="" >
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="Email" id="EmailID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Phone</label>
                        <input type="tel" class="form-control" placeholder=" " name="Phone" id="PhoneID" pattern="[789][0-9]{9}" maxlength="10" required="" >
                    </div>
                    <!-- pass pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"-->
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="Password" id="password1"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="" >
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder=" " name="ConfirmPassword" id="password2"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required=""  >
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Identity Verification Document</label>
                        <input type="file" class="form-control" placeholder=" " name="IdentityDocument" id="IdentityDocumentID" required="">
                    </div>
                    <div class="right-w3l">
                        <!--<input type="submit" name="Register"  class="form-control"  id="register">-->
                        <button type="submit" value="submit" name="Register" onclick="return register();" class="form-control btn-primary" >Register</button>
                    </div>
                   <!-- <div class="sub-w3l">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                            <label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
                        </div>
                    </div>-->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //modal -->
<!-- //top-header -->

<!-- header-bottom-->
<div class="header-bot">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid">
            <!-- logo -->
            <div class="col-md-3 logo_agile">
                <h1 class="text-center">
                    <a href="index.php" class="font-weight-bold font-italic">
                        <img src="images/logo2.png" alt=" " class="img-fluid">Electro Store
                    </a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                <div class="row">
                    <!-- search -->

                    <div class="col-10 agileits_search">
                        <form class="form-inline"  method="post" id="SearchForm">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  id="SearchInput" name="SearchInput" required>
                            <button class="btn my-2 my-sm-0" type="submit" id="SearchSubmit" name="SearchSubmit">Search</button>
                        </form>
                       <!-- <div class="list-group col-9" id="show-list">


                        </div>-->
                    </div>


                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                            <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="btn w3view-cart" type="submit" name="submit" value="">
                                    <i class="fas fa-cart-arrow-down"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- //cart details -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop locator (popup) -->
<!-- //header-bottom -->
<!-- navigation -->
<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="agileits-navi_search">
                <form action="#" method="post">
                    <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
                        <option value="">All Categories</option>
                        <option value="Televisions">Televisions</option>
                        <option value="Headphones">Headphones</option>
                        <option value="Computers">Computers</option>
                        <option value="Appliances">Appliances</option>
                        <option value="Mobiles">Mobiles</option>
                        <option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
                        <option value="iPad & Tablets">iPad & Tablets</option>
                        <option value="Cameras & Camcorders">Cameras & Camcorders</option>
                        <option value="Home Audio & Theater">Home Audio & Theater</option>
                    </select>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Electronics
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <h5 class="mb-3">Mobiles, Computers</h5>
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="product.php">All Mobile Phones</a>
                                            </li>
                                            <li>
                                                <a href="product.php">All Mobile Accessories</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Cases & Covers</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Screen Protectors</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Power Banks</a>
                                            </li>
                                            <li>
                                                <a href="product.php">All Certified Refurbished</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Tablets</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Wearable Devices</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Smart Home</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="product.php">Laptops</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Drives & Storage</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Printers & Ink</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Networking Devices</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Computer Accessories</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Game Zone</a>
                                            </li>
                                            <li>
                                                <a href="product.php">Software</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Appliances
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <h5 class="mb-3">TV, Appliances, Electronics</h5>
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="product2.php">Televisions</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Home Entertainment Systems</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Headphones</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Speakers</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">MP3, Media Players & Accessories</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Audio & Video Accessories</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Cameras</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">DSLR Cameras</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Camera Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="product2.php">Musical Instruments</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Gaming Consoles</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">All Electronics</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Air Conditioners</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Refrigerators</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Washing Machines</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Kitchen & Home Appliances</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">Heating & Cooling Appliances</a>
                                            </li>
                                            <li>
                                                <a href="product2.php">All Appliances</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="product.php">New Arrivals</a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="product.php">Product 1</a>
                            <a class="dropdown-item" href="product2.php">Product 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="single.php">Single Product 1</a>
                            <a class="dropdown-item" href="single2.php">Single Product 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="checkout.php">Checkout Page</a>
                            <a class="dropdown-item" href="payment.php">Payment Page</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->
<!--<script>
$(document).ready(function () {
alert("hhhhhh");
console.log("1");
$('#SearchInput').autocomplete({
source:function (request,response) {
$.ajax({
url:'search.php',
type:'post',
dataType:'json'
data:
{
search=request.term
},
sucess:function (data) {
response(data);

}
})

}
})

})
</script>-->
<script>


</script>
