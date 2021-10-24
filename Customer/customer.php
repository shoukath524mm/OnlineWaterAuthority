
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>Register- Customer</title>

<link rel="shortcut icon" type="image/png" href="assets/images/ico/apple-iphone.png" >
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<!-- font icons-->
<link rel="stylesheet" type="text/css" href="assets/fonts/icomoon.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/pace.css">
<!-- END VENDOR CSS-->
<!-- BEGIN ROBUST CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="assets/css/app.css">
<link rel="stylesheet" type="text/css" href="assets/css/colors.css">
<!-- END ROBUST CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/vertical-overlay-menu.css">
<!-- <link rel="stylesheet" type="text/css" href="assets/css/login-register.css"> -->
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!-- END Custom CSS-->
<script>
  function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
function validateForm() {
      var name = document.contactForm.name.value;
      var mobile = document.contactForm.mobile.value;
      var username = document.contactForm.username.value;
      var aadhar = document.contactForm.aadhar.value;
      var address = document.contactForm.address.value;

var nameErr = mobileErr = usernameErr = aadharErr =addressErr = true;

if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    if(username == "") {
        printError("usernameErr", "Please enter your username");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(username) === false) {
            printError("usernameErr", "Please enter a valid username");
        } else {
            printError("usernameErr", "");
            usernameErr = false;
        }
    }
    if(aadhar == "") {
        printError("aadharErr", "Please enter your Aadhar Number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(aadhar) === false) {
            printError("aadharErr", "Please enter a valid 12 digit Aadhar number");
        } else{
            printError("aadharErr", "");
            aadharErr = false;
        }
    }
    if(address == "") {
        printError("addressErr", "Please enter your address");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(address) === false) {
            printError("addressErr", "Please enter a valid address");
        } else {
            printError("addressErr", "");
            addressErr = false;
        }
    }
    if((nameErr || mobileErr || usernameErr || aadharErr ||addressErr) == true) {
       return false;
    } else {
        var dataPreview = "You've entered the following details: \n" +
                          "Name: " + name + "\n" +
                          "Mobile: " + mobile + "\n" +
                          "User Name: " + username + "\n" +
                          "Aadhar Number: " + aadhar + "\n" +
                          "Address: " + address + "\n";
       
    }
};



</script>
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="content-header row">
</div>
<div class="content-body">
<section class="flexbox-container">
<div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-1 p-0">
<div class="card border-grey border-lighten-3 m-0">
<div class="card-header no-border">
<div class="card-title text-xs-center">
<div class="p-1"><img src="assets/images/logo/image.png" alt="Kerala Water Authority"></div>
</div>
</div>
<div class="card-body collapse in">
<div class="card-block">
<form action="insertcustomer.php" method="post" name="contactForm" onsubmit="return validateForm()">

<fieldset class="form-group position-relative has-icon-left mb-1">
  <b>Name:</b>
<input type="text" class="form-control form-control-lg input-lg"  name="name"  placeholder="Enter Name" >
<div class="error" id="nameErr"></div>
<div class="form-control-position">
</div>
</fieldset>

<fieldset class="form-group position-relative has-icon-left mb-1">
  <b>Mobile:</b>
<input type="text" class="form-control form-control-lg input-lg"  name="mobile" placeholder="Enter Mobile" >
<div class="form-control-position">
</div>
  <div class="error" id="mobileErr"></div>

</fieldset>



<fieldset class="form-group position-relative has-icon-left mb-1">
  <b>Username:</b>
<input type="text" class="form-control form-control-lg input-lg"  name="username" id="user-name" placeholder="Your Username" >
<div class="form-control-position">
</div>
  <div class="error" id="usernameErr"></div>

</fieldset>

<fieldset class="form-group position-relative has-icon-left">
  <b>Aadhar Number:</b>
<input type="text" class="form-control form-control-lg input-lg"  name="aadhar" placeholder="Enter Aadhar Number">
<div class="form-control-position">
</div>
  <div class="error" id="aadharErr"></div>

</fieldset>
<fieldset class="form-group position-relative has-icon-left mb-1">
  <b>Address:</b>
<textarea rows="5" cols="20"  class="form-control form-control-lg input-lg" name="address" ></textarea>
  <div class="error" id="addressErr"></div>

<div class="form-control-position">

</div>
</fieldset>
<fieldset class="form-group row">
<div class="col-md-6 col-xs-12 text-xs-center text-md-left">
<button type="reset" class="btn btn-info btn-lg btn-block">Reset</button>
  
</div>
<div class="col-md-6 col-xs-12 text-xs-center text-md-left">
<input type="submit" name="register" class="btn btn-info btn-lg btn-block" value="Register">


</div>
<!-- <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div> -->
</fieldset>

</form>
<?php 
     
       if (isset($_SESSION['msg'])) 
       {
       	echo $_SESSION['msg'];
       	unset($_SESSION['msg']);
       }

 ?>
</div>
</div>
</div>
</div>
</section>

</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/tether.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="assets/js/unison.min.js" type="text/javascript"></script>
<script src="assets/js/blockUI.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="assets/js/screenfull.min.js" type="text/javascript"></script>
<script src="assets/js/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="assets/js/app-menu.js" type="text/javascript"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>
</html>
