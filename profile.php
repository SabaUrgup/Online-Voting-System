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
        include "connection.php";
        ?>
    </div>
    <div class="container" style="padding:100px;">
        <div class="row">
            <div class="col-sm-12" style="border:2px outset gray;">

                <div class="page-header text-center">
                    <h2 class="specialHead"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h2>
                </div>
                <div class="text-center">
                    <p class="normalFont">
                        <?php
                        $username = $_SESSION['SESS_NAME'];
                        $query = 'SELECT status FROM voters WHERE username="' . $_SESSION['SESS_NAME'] . '" AND status = "VOTED"';
                        if ($result = mysqli_query($con, $query)) {
                            if (mysqli_num_rows($result) > 0) {
                                $sql = mysqli_query($con, 'SELECT voted from voters WHERE username="' . $_SESSION['SESS_NAME'] . '"');
                                $row = mysqli_fetch_assoc($sql);
                                echo "You have voted for: " . " " . $row['voted'];
                            } else {
                                echo "You have not voted yet. Please submit your vote!";
                            }
                        }
                        ?>
                    </p>
                </div>
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