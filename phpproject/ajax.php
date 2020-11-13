<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 7/11/20
 * Time: 6:46 PM
 */

?>
<!
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">


    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script>
        $(document).ready(function () {
          //  alert("hhhhhh");
            // console.log("1");
            $("#SearchInput").keyup(function () {
               // alert("hey");
                var search = $(this).val();
                //console.log(search);
                if (search.length >= 3) {
                   // alert("3");
                    $.ajax({
                        url: 'http://phpproject.masumi.co/ajax.php',
                        method: 'post',
                        data: {query: search},
                        sucess: function (response) {
                            alert(response);

                        },
                        error:function (e) {
                            alert(e);

                        }
                    });

                }
            });
        });
    </script>
</head>
<body>
<form method="post">
    Search<input type="text" id="SearchInput">
    <input type="submit" name="Submit">

</form>

</body>
</html>

