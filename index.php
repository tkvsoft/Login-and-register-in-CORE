<?php
/*
TKVSOFT
*/
	include 'config.php'; //Header file
	checkLogin(); //Checking if login or not, if yes then going to home page

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP LOGIN</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="robots" content="noindex" >
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<div align="center" style="position:;top:0;right:0;left:0;width:100%;padding:20px;border-bottom:solid 1px #FFFFFF;">
  <form method="post" action="login_action.php">
    <?php

if(isset($_GET['login_error'])) 
echo '<input type="button" value="'.$_GET['login_error'].'" style="cursor:;background-color:#993300;font-weight:bold;width:420px;color:#FFFFFF;margin-right:10px;">';

?>
    <input type="text" placeholder="Email-ID:" name="email" style="width:220px;">
    <input type="password" placeholder="Password:" name="pwd" style="width:220px;">
    <input type="submit" value="LogIn" style="cursor:pointer;background-color:#FFFFFF;font-weight:bold;width:100px;">
  </form>
</div>
<div align="center" style="margin-top:50px;">
  <div style="padding:0px;width:400px;border-radius:20px;background-color:#;">
    <div style="font-size:34px;color:#000000;margin-bottom:50px;text-transform:uppercase;">PHP Register</div>
    <form method="post" action="register_action.php">
      <?php

if(isset($_GET['signup_error'])) 
echo '<input type="button" value="'.$_GET['signup_error'].'" style="cursor:;background-color:#993300;font-weight:bold;color:#FFFFFF;"><br>';

?>
      <input type="text" placeholder="Full name:" name="full_name">
      <br>
      <input type="text" placeholder="Email-ID:" name="email">
      <br>
      <input type="password" placeholder="Password:" name="pwd">
      <br>
      <input type="submit" value="Register" style="cursor:pointer;background-color:#FFFFFF;font-weight:bold;">
    </form>
  </div>
</div>
</body>
</html>
