<?php
/*
TKVSOFT
*/
	include 'config.php';
	checkLogout();//Checking if logout or not, if yes then going to login page
	
	if(isset($_POST['full_name']))
	{
	
		$full_name 	= $_POST['full_name'];
		$email 		= $_POST['email'];
		$pwd 		= $_POST['pwd'];
		
		
		if(empty($full_name) or strlen($full_name)<1)
		{
			header("Location: home.php?edit_error=Enter full name");
			exit;
		}
		else if(empty($email) or strlen($email)<1)
		{
			header("Location: home.php?edit_error=Enter email");
			exit;
		}
		else if( !isEmail($email))
		{
			header("Location: home.php?edit_error=Check email id");
			exit;
		}
		else if(empty($pwd) or strlen($pwd)<6)
		{
			header("Location: home.php?edit_error=Enter password min 6 char");
			exit;
		}
		
		
		
		$check = mysqli_query($db,"SELECT * FROM users where uid='".$_SESSION['USER_ID']."' ");
		if(mysqli_num_rows($check))
		{
			$check = mysqli_query($db,"UPDATE  users SET ufname='".$full_name."',uemail='".$email."',upwd='".$pwd."' where uid='".$_SESSION['USER_ID']."'	");
			
			header("Location: home.php?updated");
			exit;
		}
		else
		{
			header("Location: home.php?edit_error=Editng Error");
			exit;
		}
		
	
	}

?>
