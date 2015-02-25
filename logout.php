<?php
	session_start();
	if(isset($_SESSION['aclogin'])){
		unset($_SESSION['aclogin']);
	}
	session_unset();
	session_destroy();
	header("location: login.php");
?>