<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 04/05/2018
 * Time: 16:19
 */

include 'admin/connection.php';
global $conn;

$cid = $_POST['clientid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pentagon Interior | Clientele</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/plugin.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/new.css" type="text/css">
    <link rel="stylesheet" href="css/slideshow.css" type="text/css">
    <link rel="stylesheet" href="css/social_media.css" type="text/css">
    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>

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
                            <img class="logo" src="images/icon.PNG" alt="">
                        </a>
                    </div>
                    <!-- logo close -->

                    <!-- small button begin -->
                    <span id="menu-btn"></span>
                    <!-- small button close -->

                    <!-- mainmenu begin -->
                    <nav>
                        <ul id="mainmenu">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="about.php">About Us</a>
                                <ul>
                                    <li><a href="history.php">Our History</a></li>
                                    <li><a href="services.php">Our Services</a></li>
                                </ul>
                            </li>
                            <li><a href="clientele.php">Clientele</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>

                </div>
                <!-- mainmenu close -->

            </div>
        </div>
    </header>
    <!-- header close -->


    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <?php
        include 'admin/connection.php';
        global $conn;
        $sql = "SELECT * FROM `project_details` WHERE `client_id` = '$cid'";
        $result = $conn->query($sql);


        while($row = mysqli_fetch_array($result)) {

        $sq = "SELECT * FROM `client` WHERE `client_id` ='$cid'";
        $res = $conn->query($sq);
        while ($row1 = mysqli_fetch_array($res)){

        $year = $row['year'];
        $challenge = $row['challenge'];
        $solution = $row['solution'];
        $outcome = $row['outcome'];
        $a = $solution.".".$outcome;
        $name = $row1['client_name'];



        ?>
        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp" style="margin-top: 4%; visibility: visible">
            <h1>CLIENT: <?php echo $name;?></h1>
            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
            <div class="spacer-single"></div>
        </div>
        <section style="margin-top: 9%;" id="clientproject">
            <div style="float: right; margin-right: 5%;width: 40%;">
                <ul>

                    <li><br><br>
                        <h3><span>Year:</span> &emsp;&emsp;&emsp;&emsp;<?php echo $year;?></h3><br>

                        <h3><span>Challenge:</span> &emsp;<?php echo $challenge;?></h3><br>

                        <h3><span>Solution:</span>&emsp;&emsp;<?php echo $a;?></h3><br>
                        <br><?php } }?>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div >

                                <?php

                                $sql = "SELECT * FROM `clientimage` WHERE client_id = '$cid' LIMIT 3;";
                                $result = $conn->query($sql);


                                $file = "admin/client/";
                                while($row = mysqli_fetch_array($result)) {
                                $id = $row['client_id'];
                                $img = $file . $row['image_name'];

                                    ?>
                            <div class="slideshow-container">
                                    <div class="mySlides fade">
                                        <img src="<?php echo $img; ?>" style="width:324px; height: 220px;">
                                    </div>

                                    <?php
                                } ?>
                            </div>
                            <br>

                            <div style="text-align:center;" >
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- logo carousel section close -->
    </div>
    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="width: 100%; height: 300px;" id="map"></div>
                    <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgWjyq3396nSbiVANvEddd38Nt07SW8qU&callback=initMap">
                    </script>
                    <br>
                </div>

                <div class="col-md-4">
                    <div class="widget widget_recent_post">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="history.php">Company History</a></li>
                            <li><a href="services.php">Our services</a></li>
                            <li><a href="clientele.php">Clientele</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                        </ul>
                        <a href="https://www.facebook.com/pages/Pentagon-Interior-LTD/662952133861650" class="fa fa-facebook"></a>
                        <a href="https://www.google.com/search?q=pentagoninterior&oq=pentagoninterior&aqs=chrome..69i57j69i60l4j0.4294j0j7&sourceid=chrome&ie=UTF-8" class="fa fa-google"></a>
                        <a href="mailto:esales@pentagoninterior.com" class="fa fa-envelope"></a>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <div class="widget widget-address">
                        <address>
                            <span><strong>Address:</strong>Road 1, Nationwide Godowns, Godown 7, Baba Dogo Rd, Nairobi</span>
                            <span><strong>Phone:</strong>+254 737 525209</span>
                            <span><strong>Email:</strong><a href="mailto:contact@archi-interior.com">contact@pentagoninterior.com</a></span>
                            <span><strong>Web:</strong><a href="#">http://pentagoninterior.com</a></span>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" id="back-to-top"></a>
    </footer>
    <!-- footer close -->
</div>


<!-- Javascript Files
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/map.js"></script>
<script src="js/jpreLoader.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/easing.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.scrollto.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/classie.js"></script>
<script src="js/video.resize.js"></script>
<script src="js/validation.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/enquire.min.js"></script>
<script src="js/designesia.js"></script>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
</body>

</html>
