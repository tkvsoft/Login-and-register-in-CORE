<?php
/*
TKVSOFT
*/
	include 'config.php';
	
	unset($_SESSION['USER_ID']);
	session_destroy();
	header("Location: index.php?logout");
	exit;
?>