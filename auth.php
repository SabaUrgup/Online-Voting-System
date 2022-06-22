<?php
if (!isset($_SESSION['SESS_NAME'])) {
	header("Location: login.php");
}
?>