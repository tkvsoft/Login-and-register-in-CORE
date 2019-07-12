<?php
/*
TKVSOFT
Programmed by TITTO - 01/07/2019
*/
#CONFIG FILE 





//error_reporting(0); //hide errors
$db = mysqli_connect("localhost","root","","php_login") or die("Connection error"); //database connection
session_start();// session starting



	/*
		Function declaration 
		You can declare more functions here  
	*/

function isEmail($q)
{
	return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $q) ? TRUE : FALSE;
}

 

function checkLogin()
{
	if(isset($_SESSION['USER_ID']))
	{
	header("Location: home.php?welcome");
	exit;
	}
}


function checkLogout()
{
	if(!isset($_SESSION['USER_ID']))
	{
	header("Location: index.php");
	exit;
	}
}



?>