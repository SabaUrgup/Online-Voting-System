<?php
session_start();
include "connection.php"; 
if(isset($_POST['login'])) {
$username = $_POST["username"];
$password = $_POST["password"];
$username = addslashes($username);
$password = addslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);

$sql = mysqli_query($con, 'SELECT * FROM loginusers WHERE username="'.$_POST['username'].'"  AND password="'.md5($_POST['password']).'" AND status="ACTIVE" ' );
if (mysqli_num_rows($sql) >0 ) {
	$member =  mysqli_fetch_assoc($sql);
	$_SESSION['SESS_NAME'] = $member['username'];
	$_SESSION['SESS_RANK'] = $member['rank'];
	
	if($member['rank']=='administrator'){
			header("location: admin.php");
			}
			else if($member['rank']=='voter'){
			header("location: voter.php");
			}
}
else {
	$error = "<center><h4><font color='#FF0000'>Incorrect Username or Password</h4></center></font>";
	include "login.php";
}
}
else {
	$error = "<center><h4><font color='#FF0000'>Invalid Username or Password</h4></center></font>";
	include "login.php";
}
?>