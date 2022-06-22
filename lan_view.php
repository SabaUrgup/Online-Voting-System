<!DOCTYPE html>

<html>

<head>
	<?php
	require 'header_voter.php';
	?>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>

<body>
	<div class="col-sm-12">
		<?php
		if (!isset($_SESSION)) {
			session_start();
		}
		include "auth.php";
		include "header_voter.php";
		?>
	</div>
	<div class="container" style="padding:100px;">
		<div class="row">
			<div class="col-sm-12" style="border:2px outset gray;">

				<div class="page-header text-center">
					<h2 class="specialHead">
						<font color="red">Live Voting Result!.. </font>
					</h2>
				</div>

				<?php
				include "connection.php";
				$member = mysqli_query($con, 'SELECT * FROM languages');
				if (mysqli_num_rows($member) == 0) {
					echo '<font color="red">No results found</font>';
				} else {
					echo '<center><table><tr bgcolor="d0d0d0">
							<td width="60px">ID</td>		
							<td width="200px">LANGAUAGE</td>
							<td width="200px">ABOUT</td>
							<td width="60px">VOTE</td>
							</tr>';
					while ($mb = mysqli_fetch_object($member)) {
						$id = $mb->lan_id;
						$name = $mb->fullname;
						$about = $mb->about;
						$vote = $mb->votecount;
						echo '<tr bgcolor="#f0f0f0">';
						echo '<td>' . $id . '</td>';
						echo '<td>' . $name . '</td>';
						echo '<td>' . $about . '</td>';
						echo '<td>' . $vote . '</td>';
						echo "</tr>";
					}
					echo '</table></center>';
				}
				?>
				<br>
			</div>
		</div>

	</div>
	<!-- Footer -->
	<nav class="navbar fixed-bottom navbar-light bg-light">
		<footer class="page-footer font-small special-color-dark pt-4">
			<div class="footer-copyright text-center py-3">© 2022 Copyright:
				<a href="/"> Online Voting System </a>
			</div>
		</footer>
	</nav>

</body>

</html>