/**
 * Created by masumiupadhyay on 27/10/20.
 */



function register() {
//alert("innnn");
   // console.log("hii in");
    var fname=document.getElementById("FirstNameID").value;
    var lname=document.getElementById("LastNameID").value;
    var email=document.getElementById("EmailID").value;
    var phone=document.getElementById("PhoneID").value;
    var password=document.getElementById("password1").value;
    var password_confirm=document.getElementById("password2").value;
    var doc=document.getElementById("IdentityDocumentID").value;
   // console.log(fname);
    var x = email.indexOf('@');
    var y = email.lastIndexOf('.');
    if(fname == ''){
       //alert("hi");
        document.getElementById('formvalidation').innerHTML = 'Please Enter Your First Name';
       return false;
    }
    else if(lname == ''){
        document.getElementById('formvalidation').innerHTML = 'Please Enter Your Last Name';
        return false;
    }
    else if(x < 1 || y < x+2 || y+2 >= email.length){
        document.getElementById('formvalidation').innerHTML = 'Please Enter Your Email like exapmle@gmail.com';
        return false;
    }
    else if(phone == '') {
        document.getElementById('formvalidation').innerHTML = 'Please Enter Your phoneno';
        return false;
    }
    else if(password == ''){
        document.getElementById('formvalidation').innerHTML = 'Please Enter Your Password that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter:';
        return false;
    }
    else if(password_confirm == ''){
        document.getElementById('formvalidation').innerHTML = 'Please Enter Your confirmation password';
        return false;
    }
    else if(password_confirm !== password){
        document.getElementById('formvalidation').innerHTML = 'Password does not match Enter correct password';
         return false;
    }
}

function login() {
    
    
}

/*
(function() {
    $('form').keyup(function() {
        alert("hirir");
        console.log("in");
        var empty = false;
        $('form > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#register').attr('disabled', 'disabled');
        } else {
            console.log("diabled remove");
            $('#register').removeAttr('disabled');
        }
    });
})()
*/
