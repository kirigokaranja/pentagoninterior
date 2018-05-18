<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/dropzone.css">
    <link rel="stylesheet" href="../css/upload.css">
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="../css/animate.css" type="text/css">
    <link rel="stylesheet" href="../css/plugin.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/index.css" type="text/css">
    <link rel="stylesheet" href="../css/new.css" type="text/css">


    <!-- custom background -->
    <link rel="stylesheet" href="../css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="../css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="../fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="../fonts/et-line-font/style.css" type="text/css">


    <script src="../js/dropzone.js"></script>
    <script src="../js/upload.js"></script>
    <!-- script files -->
</head>

<body id="homepage">

<div id="wrapper">

    <!-- header begin -->
    <header>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- logo begin -->
                    <div id="logo">
                        <a href="index.php">
                            <img class="logo" src="../images/icon.PNG" alt="">
                        </a>
                    </div>
                    <!-- logo close -->

                    <!-- small button begin -->
                    <span id="menu-btn"></span>
                    <!-- small button close -->

                    <!-- mainmenu begin -->
                    <nav>
                        <ul id="mainmenu">
                            <li><a href="index.php" >Dashboard</a></li>
                            <li><a href="" class="active">Client</a>
                                <ul>
                                    <li><a href="client.php">Project Info</a></li>
                                    <li><a href="images.php" class="active">Slideshow Info</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Clientele</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>

                </div>
                <!-- mainmenu close -->

            </div>
        </div>
    </header>
</div> <?php
session_start();
require('connection.php');global $conn;
$userid = $_SESSION['uid'];
$sq = "SELECT * FROM client WHERE client_id = '$userid'";
$res = $conn->query($sq) or trigger_error($conn->error . "[$sq]");
if ($res && $row = $res->fetch_assoc()) {
$username = $row['client_name'];
?>
<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp" style="margin-top: 8%">
    <h1>Slideshow Image Upload For <span style="color: #FAB702"><?php echo $username; }?></span></h1>
    <div class="separator"><span><i class="fa fa-circle"></i></span></div>
    <div class="spacer-single"></div>

</div>
<div style="width: 45%;margin-left: 28%;margin-top: 15%">

    <form action="addimages.php" method="post" enctype="multipart/form-data" class="dropzone" id="my-dropzone"
          style="min-height: 350px; border: dotted 2px black; color: black">
<br>
        <div class="fallback" style="position: relative;color: black">
            <input name="file" type="file" multiple />

        </div>
        <input type="hidden" name="uid" value="<?php echo $userid;?>">
    </form>
    <div class="col-md-8 col-md-offset-2 text-center">
        <button class="btn btn-large" id="submit-all">Upload Photos</button>
    </div>

</div>


<!-- Javascript Files
================================================== -->
<script src="../js/jquery.min.js"></script>
<script src="../js/map.js"></script>
<script src="../js/jpreLoader.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/easing.js"></script>
<script src="../js/jquery.flexslider-min.js"></script>
<script src="../js/jquery.scrollto.js"></script>
<script src="../js/owl.carousel.js"></script>
<script src="../js/jquery.countTo.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/video.resize.js"></script>
<script src="../js/validation.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/enquire.min.js"></script>
<script src="../js/designesia.js"></script>

</body>
</html>