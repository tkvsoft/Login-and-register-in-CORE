<?php


	include 'config.php';
	checkLogin();
	
	if(isset($_POST['full_name']))
	{
	
		$full_name 	= $_POST['full_name'];
		$email 		= $_POST['email'];
		$pwd 		= $_POST['pwd'];
		
		
		if(empty($full_name) or strlen($full_name)<1)
		{
			header("Location: index.php?signup_error=Enter full name");
			exit;
		}
		else if(empty($email) or strlen($email)<1)
		{
			header("Location: index.php?signup_error=Enter email");
			exit;
		}
		else if( !isEmail($email))
		{
			header("Location: index.php?signup_error=Check email id");
			exit;
		}
		else if(empty($pwd) or strlen($pwd)<6)
		{
			header("Location: index.php?signup_error=Enter password min 6 char");
			exit;
		}
		
		
		
		$check = mysqli_query($db,"SELECT * FROM users where uemail='".$email."'");
		if(!mysqli_num_rows($check))
		{
			$check = mysqli_query($db,"INSERT INTO users (ufname,uemail,upwd) VALUES('".$full_name."','".$email."','".$pwd."')	");
			$_SESSION['USER_ID'] = mysqli_insert_id($db);
			header("Location: home.php?welcome");
			exit;
		}
		else
		{
			header("Location: index.php?signup_error=Register Error, This email id already exist!");
			exit;
		}
		
	
	}

?>