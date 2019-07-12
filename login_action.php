<?php


	include 'config.php';
	checkLogin();
	
	if(isset($_POST['email']))
	{
	
		$email 		= $_POST['email'];
		$pwd 		= $_POST['pwd'];
		
		
		if(empty($email) or strlen($email)<1)
		{
			header("Location: index.php?login_error=Enter email");
			exit;
		}
		else if( !isEmail($email))
		{
			header("Location: index.php?login_error=Check email id");
			exit;
		}
		else if(empty($pwd) or strlen($pwd)<6)
		{
			header("Location: index.php?login_error=Enter password");
			exit;
		}
		
		
		
		$check = mysqli_query($db,"SELECT * FROM users where uemail='".$email."' AND  upwd='".$pwd."'");
		if(mysqli_num_rows($check))
		{
			$row = mysqli_fetch_array($check);
			$_SESSION['USER_ID'] = $row['uid'];
			header("Location: home.php?welcome");
			exit;
		}
		else
		{
			header("Location: index.php?login_error=Login Error, user does not exist or password error!");
			exit;
		}
		
	
	}

?>