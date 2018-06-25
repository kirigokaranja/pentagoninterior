<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 29/04/2018
 * Time: 09:23
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pentagon Interior | About Us</title>
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
    <link rel="stylesheet" href="css/newstyle.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/social_media.css" type="text/css">
    <link rel="stylesheet" href="css/team.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">
    <style>
        .sidetab {
            color: white;
            float: left;
            border: 1px solid #18191b;
            background-color: #18191b;
            width: 30%;
            margin-left: 5px;
            margin-top: 60px;
            height: 100%;
        }
        .sidetab button {
            display: block;
            background-color: inherit;
            color: white;
            padding: 22px 16px;
            font-size: 20px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
        }
        .sidetab button:hover {
            background-color: #fff;
            color: #18191b;
        }
        .sidetab button.active {
            background-color: #fff;
            color: #18191b;
        }
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 300px;
        }
        .sidetabcotent{
            padding: 20px;
            margin-left: 30%;
            width: 70%;
        }

    </style>
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
                            <li><a href="index.php">Home</a></li>
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
                            <li><a href="help.php" class="active">FAQs</a></li>
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

        <section id="aboutcontent" style="height: 100vh;">



            <div class="sidetab">
                <button class="sidetablinks" onclick="openTab(event, 'homepaged')">What we Do</button>
                <button class="sidetablinks" onclick="openTab(event, 'feedbackd')">Feedback Duration</button>
                <button class="sidetablinks" onclick="openTab(event, 'aboutus')">About Us</button>
                <button class="sidetablinks" onclick="openTab(event, 'clientelle')">Clientelle</button>
                <button class="sidetablinks" onclick="openTab(event, 'galleria')">Gallery</button>
                <button class="sidetablinks" onclick="openTab(event, 'portfolio')">Portfolio</button>
                <button class="sidetablinks" onclick="openTab(event, 'contact')">Contact</button>
            </div>


            <section id="homepaged" style="margin-top: 10%; " class="sidetabcotent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center col-md-6-12 content">
                            <div class="editContent">
                                <h1>Our Home Page</h1>
                                <br>
                            </div>
                            <div class="editContent">
                                <p style="font-size: 20px">This page gives an overview of what Pentagon Interior is and some of the services offered. To navigate to the Home page click the link below </p>

                            </div>
                            <a href="index.php" class="btn btn-outline btn-outline outline-dark">HOME</a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.container -->
            </section>

            <section id="feedbackd" style="margin-top: 10%" class="sidetabcotent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center col-md-6-12 content">
                            <div class="editContent">
                                <h1>Feedback time</h1>
                                <br>
                            </div>
                            <div class="editContent">
                                <p style="font-size: 20px">After requesting for a service feedback will be given within 24hours and the request will be forwarded to the responsible party. </p>

                            </div>

                        </div>
                    </div><!-- /.row-->
                </div><!-- /.container -->
            </section>

            <section id="aboutus"  style="margin-top: 10%" class="sidetabcotent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center col-md-6-12 content">
                            <div class="editContent">
                                <h1>About Us</h1>
                                <br><br>
                            </div>
                            <div class="editContent">
                                <p style="font-size: 20px">This page gives a detailed description of our company, including its History and all Services we provide. To have a look at our History and Services, click on the links below </p>

                            </div>
                            <a href="history.php" class="btn btn-outline btn-outline outline-dark">History</a>
                            <a href="services.php" class="btn btn-outline btn-outline outline-dark">Services</a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.container -->
            </section>

            <section id="clientelle"  style="margin-top: 10%" class="sidetabcotent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center col-md-6-12 content">
                            <div class="editContent">
                                <h1>What is the Clientele Module?</h1>
                                <br><br>
                            </div>
                            <div class="editContent">
                                <p style="font-size: 20px">This page displays the companies/clients we have worked with and the services rendered to them. To navigate to the Home page click the link below or the one provided at the menu above</p>

                            </div>
                            <a href="clientele.php" class="btn btn-outline btn-outline outline-dark">CLIENTELE</a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.container -->
            </section>

            <section id="galleria" style="margin-top: 10%" class="sidetabcotent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center col-md-6-12 content">
                            <div class="editContent">
                                <h1>The Gallery</h1>
                                <br><br>
                            </div>
                            <div class="editContent" >
                                <p style="font-size: 20px">This page displays the products and services we offer. To see some of the above, click the link provided below or the one on the main menu</p>

                            </div>
                            <a href="gallery.php" class="btn btn-outline btn-outline outline-dark">GALLERY</a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.container -->
            </section>

            <section id="portfolio" class="sidetabcotent" style="margin-top: 10%">
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center col-md-6-12 content">
                            <div class="editContent">
                                <h1>What does the Portfolio Module do?</h1>
                                <br><br>
                            </div>
                            <div class="editContent">
                                <p style="font-size: 20px">This module outlines some of the core values, vision and mission that Pentagon Interiors operates on. It also displays some of the products provided by our company. </p>

                            </div>
                            <a href="portfolio.php" class="btn btn-outline btn-outline outline-dark">PORTFOLIO</a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.container -->
            </section>

            <section id="contact" class="sidetabcotent" style="margin-top: 10%">

                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center col-md-6-12 content">
                            <div class="editContent">
                                <h1>How can I contact Pentagon Interiors?</h1>
                                <br><br>
                            </div>
                            <div class="editContent">
                                <p style="font-size: 20px">To communicate with our company, one can directly contact us through the Phone Number provided on the Quick Links provided below or, by filling out the form provided in the Contact module, whose link is provided below</p>

                            </div>
                            <a href="contact.php" class="btn btn-outline btn-outline outline-dark">CONTACT US</a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.container -->
            </section>


        </section>



        <script>
            function openTab(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("sidetabcotent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("sidetablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            document.getElementById("open").click().style.display = "block";
        </script>





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
                                <li><a href="admin/login.php">Dashboard</a></li>
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

</body>
</html>
