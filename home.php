<?php
/*
TKVSOFT
*/
	include 'config.php';
	checkLogout();//Checking if logout or not, if yes then going to login page


	/*
	Fetching the data from database, by conduction uid
	*/	
	
	$check = mysqli_query($db,"SELECT * FROM users where uid='".$_SESSION['USER_ID']."'");
	$row = mysqli_fetch_array($check);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOME</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="robots" content="noindex" >
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<div align="center" style="margin-top:50px;">
  <div style="font-size:34px;color:#FFFFFF;margin-bottom:50px;">Welcome <?php echo $row['ufname'];?>, (<a href="logout.php">LogOut</a>)</div>
  <div style="padding:0px;width:400px;border-radius:20px;background-color:#;">
    <form method="post" action="edit.php">
      <?php
if(isset($_GET['edit_error'])) echo '<input type="button" value="'.$_GET['edit_error'].'" style="cursor:;background-color:#993300;font-weight:bold;color:#FFFFFF;"><br>';
?>
      <input type="text" placeholder="Full name:" name="full_name" value="<?php echo $row['ufname'];?>">
      <br>
      <input type="text" placeholder="Email-ID:" name="email" value="<?php echo $row['uemail'];?>">
      <br>
      <input type="password" placeholder="New Password:" name="pwd">
      <br>
      <input type="submit" value="Update" style="cursor:pointer;background-color:#FFFFFF;font-weight:bold;">
    </form>
  </div>
</div>
</body>
</html>
