<?php
session_start();
if (!isset($_SESSION['userSession'])) {
	header("Location: login.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: index.php");
}

	if("username"){
	session_destroy();
	unset($_SESSION['SESS_NAME']);
	include'login.php';
	}
?>
