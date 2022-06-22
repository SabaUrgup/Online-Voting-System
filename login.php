<!DOCTYPE html>

<html>

<head>
	<?php require 'header.php'; ?>
</head>

<body>
	<div class="col-sm-12">
		<?php
		if (!isset($_SESSION)) {
			session_start();
		}
		if (isset($_SESSION['SESS_NAME']) != "") {
			header("Location: voter.php");
		}
		?>
	</div>
	<br>
	<br>
	
	<div class="container" style="padding:100px;">
		<div class="row">
			<div class="col-sm-12" style="border:2px outset gray;">

				<div class="page-header text-center">
					<h3 class="specialHead">Login for Voting!.. </h3>
				</div>

				<?php global $nam;
				echo $nam; ?>
				<?php global $error;
				echo $error; ?>
				<br>
				<center>
					<font size="4">
						<form action="login_action.php" method="post" id="myform">
							Username :
							<input type="text" name="username" value="">
							<br>
							<br>
							Password :
							<input type="password" name="password" value="">
							<br>
							<br>
							<input type="submit" name="login" value="Login">
						</form>
					</font>
				</center>
				<br><br>
			</div>
		</div>
	</div>
	</div>
	<script type="text/javascript">
		var frmvalidator = new Validator("myform");
		frmvalidator.addValidation("username", "req", "Please Enter Username");
		frmvalidator.addValidation("username", "maxlen=50");
		frmvalidator.addValidation("password", "req", "Please Enter Password");
	</script>
</body>

</html>