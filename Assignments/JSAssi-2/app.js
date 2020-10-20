
$( function() {
   // console.log("in");
    $( "#birthday" ).datepicker();
} );
function showPassword() {
    //console.log("hi");
    var x = document.getElementById("passwordId");
    if (x.type === "password") {
        //console.log("hey");
        x.type = "text";
    } else {
        x.type = "password";
    }
}


// ******************** Registration page coding ***************************

var arr = [];
function register(){
 
var email = document.forms['myForm']['email'].value;
var confirmemail=document.forms['myForm']['confirmemail'].value;
    //console.log(confirmemail);
var x = email.indexOf('@');
var y = email.lastIndexOf('.');

var firstName =document.getElementById('firstNameId').value;
var lastName = document.getElementById('lastNameId').value;
var userName = document.getElementById('userNameId').value;
var emailAddress = document.getElementById('emailId').value;
var email_confirm= document.getElementById('confirmemailId').value;
var phoneno = document.getElementById('phoneno').value;
var birthday = document.getElementById('birthday').value;
   // console.log(birthday);
var password = document.getElementById('passwordId').value;
var password_confirm = document.getElementById('password_confirmation').value;

// **********************    form validation    *****************************
if(firstName == ''){
    
document.getElementById('formvalidation').innerHTML = 'Please Enter Your Name';

return;
}
else if(lastName == ''){
document.getElementById('formvalidation').innerHTML = 'Please Enter Your Last Name';
return;
}
else if(userName == ''){
document.getElementById('formvalidation').innerHTML = 'Please Enter Your User Name';
return;
} 
else if(x < 1 || y < x+2 || y+2 >= email.length){
    document.getElementById('formvalidation').innerHTML = 'Please Enter Your Email like exapmle@gmail.com';
    return;
}
else if(x < 1 || y < x+2 || y+2 >= confirmemail.length){
    document.getElementById('formvalidation').innerHTML = 'Please Enter Your Email like exapmle@gmail.com';
    return;
}
else if(email_confirm !== email){
    //alert("in");
    document.getElementById('formvalidation').innerHTML = 'Email does not match Enter correct email';
    return;
}
else if(phoneno == '') {
    document.getElementById('formvalidation').innerHTML = 'Please Enter Your phoneno';
    return;
}
else if(birthday == '') {
    document.getElementById('formvalidation').innerHTML = 'Please Enter Your birthday';
    return;
}
else if(password == ''){
document.getElementById('formvalidation').innerHTML = 'Please Enter Your Password';
return;
}
else if(password_confirm == ''){
document.getElementById('formvalidation').innerHTML = 'Please Enter Your confirmation password';
return;
    }  
 else if(password_confirm !== password){
document.getElementById('formvalidation').innerHTML = 'Password does not match Enter correct password';
return;
    }  
var objFiled = { 
    userFirstName : firstName , 
    userlastName : lastName ,
    userFullName : userName , 
    userEmailAddress : emailAddress ,
    userPhoneNo : phoneno,
    userBirthDay : birthday,
    userPassword : password
};
    $(objFiled).each(function (index,item) {
        console.log("funn");
        $('#fname').text(item.userFirstName);
        $('#lname').text(item.userlastName);
        $('#fullname').text(item.userFullName);
        $('#email').text(item.userEmailAddress);
        $('#phone').text(item.userPhoneNo);
        $('#bday').text(item.userBirthDay);
        $('#password').text(item.userPassword);

    });
    console.log(objFiled);
arr.push(objFiled);

//******************localStorage ********************************

localStorage.setItem( "Registration" , JSON.stringify(arr));
sweetAlert("Done...", "Registration completed" ,"success");
/////////////////////////////////////////////////////////////////////////////////////////////////////LIGHT-BOX



////////////////////////////////////////////////////////////////////////////////////////////////////
// *****************empty input field *******************************

document.getElementById('firstNameId').value = '';
document.getElementById('lastNameId').value = '';
document.getElementById('userNameId').value = '';
document.getElementById('emailId').value = '';
document.getElementById('passwordId').value = '';
document.getElementById('password_confirmation').value = '';

}
function cleartxt(){
document.getElementById('formvalidation').innerHTML = '';   
}





//=====================sign In page coding ===============================

    
     function siginpage() {
       var registrationData = localStorage.getItem("Registration");
       var getRegistration =  JSON.parse(registrationData);

      for(var i=0; i<getRegistration.length;i++){
               
        var login_Email = document.getElementById('login-username').value;
        var login_pass = document.getElementById('login-password').value;

        if(getRegistration[i].userEmailAddress != login_Email || getRegistration[i].userPassword != login_pass){
            sweetAlert("Oops...", "Something went wrong!", "error");
            return;
        }
        else{
            window.location.href = ('index.html');
        }
    
}
        
     }

