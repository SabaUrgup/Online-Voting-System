<!DOCTYPE html>

<html>

<head>
    <?php
    require 'header.php';
    ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['SESS_NAME']) != "") {
        header("Location: voter.php");
    }
    ?>
    <?php global $msg;
    echo $msg; ?>
    <main>
        <div class="container">
            <div class="container" style="padding:100px;">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="conatiner" id="featuresTab">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="page-header" style="padding-top:50px;padding-bottom:50px">
                                    <img src="images/now.png" width="440px" alt="Icon">
                                        <h1 class="specialHead" style="font-size:44px;">Online Voting System</h1>
                                        <p class="normalFont" style="font-size:24px;">Welcome!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="conatiner" id="featuresTab">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="page-header" style="padding-top:50px;padding-bottom:50px">
                                        <h1 class="normalFont" style="font-size:44px;">WHAT IS IT?</h1>
                                        <p class="subFont" style="font-size:24px;">An Interactive Way of Election</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="conatiner" style="padding:50px;" id="aboutTab">
                            <div class="row">

                                <div class="col-sm-4 text-center">

                                    <h2 class="normalFont" style="font-size:28px;">Register.</h2>
                                    <p>You Just Need Basic Details of Yours and We Will Let You Vote</p>

                                </div>
                                <div class="col-sm-4 text-center">

                                    <h2 class="normalFont" style="font-size:28px;">Profile</h2>
                                    <p>Shows You Details about Your Votes. </p>

                                </div>
                                <div class="col-sm-4 text-center">

                                    <h2 class="normalFont" style="font-size:28px;">Statitics</h2>
                                    <p>Shows You the Vote Results of the Election.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Footer -->
            <nav class="navbar fixed-bottom navbar-light bg-light">
                <footer class="page-footer font-small special-color-dark pt-4">
                    <div class="footer-copyright text-center py-3">© 2022 Copyright:
                        <a href="https://github.com/SabaUrgup/Online-Voting-System"> Online Voting System Source Code </a>
                    </div>
                </footer>
            </nav>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>

        </div>
    </main>

</body>

</html>