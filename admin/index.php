<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 03/05/2018
 * Time: 22:44
 */
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Pentagon Interior | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">


        <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <![endif]-->


        <!-- CSS Files
    ================================================== -->
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



        <!-- custom background -->
        <link rel="stylesheet" href="../css/bg.css" type="text/css">

        <!-- color scheme -->
        <link rel="stylesheet" href="../css/color.css" type="text/css" id="colors">

        <!-- load fonts -->
        <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="../fonts/elegant_font/HTML_CSS/style.css" type="text/css">
        <link rel="stylesheet" href="../fonts/et-line-font/style.css" type="text/css">
        <link rel="stylesheet" href="../css/login.css">
        <script src="../js/dropzone.js"></script>
        <script src="../js/upload.js"></script>

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
                                        <li><a href="index.php" class="active">Dashboard</a></li>
                                        <li><a href="#" onclick="openNav()">Quick access</a>
                                            <li><a href="../index.php">Logout</a>
                                    </ul>
                                </nav>

                            </div>
                            <!-- mainmenu close -->

                        </div>
                    </div>
                </header>
                <!-- header close -->

                <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <style>
                        .sidenav {
                            margin-top: 80px;
                            height: 100%;
                            width: 0;
                            position: fixed;
                            z-index: 1;
                            top: 0;
                            left: 0;
                            background-color: #111;
                            overflow-x: hidden;
                            transition: 0.5s;
                            padding-top: 60px;
                        }

                        .sidenav a {
                            padding: 8px 8px 8px 32px;
                            text-decoration: none;
                            font-size: 20px;
                            color: #818181;
                            display: block;
                            transition: 0.3s;
                            font-family: 'Raleway', sans-serif
                        }

                        .sidenav a:hover {
                            color: #f1f1f1;
                        }

                        .sidenav .closebtn {
                            position: absolute;
                            top: 0;
                            right: 25px;
                            font-size: 36px;
                            margin-left: 50px;
                        }

                        @media screen and (max-height: 450px) {
                            .sidenav {
                                padding-top: 15px;
                            }
                            .sidenav a {
                                font-size: 14px;
                            }
                        }

                    </style>
                </head>

                <body>

                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a data-toggle="modal" data-target="#myModal">Add Administrator</a>
                        <a data-toggle="modal" data-target="#myModal2">Manage Gallery</a>
                    </div>
                    <script>
                        function openNav() {
                            document.getElementById("mySidenav").style.width = "250px";
                        }

                        function closeNav() {
                            document.getElementById("mySidenav").style.width = "0";
                        }

                    </script>
                    <!-- Modal1 -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add Administrators</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">New Admin username</label>
                                            <input class="form-control" id="exampleInputEmail1" name="Username" type="text" placeholder="Enter Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">New Admin Password</label>
                                            <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" required>
                                        </div>
                                        <button class="btn btn-primary btn-block" name="Login">Create Account</button>
                                        <br>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Modal2 -->
                    <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add Images To Gallery</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data">

                                        <label class="password">
            <input type="file" name="Upload"><br>
        </label>
                                        <label class="password">
            <span class="label-text">Image Description</span>
            <input class="texts" type="text" name="description"required/>
        </label>
                                        <div class="text-center">
                                            <input type="submit" class="submit" value="SAVE CHANGES" name="Send">
                                        </div>
                                    </form>
                                    <?php
include('connection.php');
if(isset($_POST['Send'])){
    $Des = $_POST['description'];
    $target_dir = "Uploads/";
    $target_file = $target_dir . basename($_FILES["Upload"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $Attach_path=$_FILES['Upload']['name'];
    $sql="INSERT INTO `maingallery`(`Description`, `FileName`) VALUES ('".$Des."','".$Attach_path."')"; 
    
  if(mysqli_query($conn,$sql)){
      move_uploaded_file($_FILES["Upload"]["tmp_name"],$target_file);
}else{
    echo"File not uploaded";
    
}
    }
?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>


                </body>





                <!-- content begin -->
                <div id="content" class="no-bottom no-top">
                    <section id="section-about" class="section-about">
                        <div class="container">
                            <div class="row"><br>
                                <div class="col-md-6 col-sm-8 about-details">
                                    <div class="single-about-detail">
                                        <div class="">
                                            <h3>ADD NEW CLIENTELLE</h3>
                                            <br>
                                            <form method="post" action="addclient.php" enctype="multipart/form-data">

                                                <label class="password">
            <input type="file" name="myimage"  onchange="preview_image(event)"><br>
        </label>
                                                <label class="password">
            <span class="label-text">Client Name</span>
            <input class="texts" type="text" name="clientname"required/>
        </label>
                                                <label class="password">
            <span class="label-text">Year</span>
            <input class="texts" type="text" name="year" required/>
        </label>
                                                <label class="password">
            <span class="label-text">Challenge</span>
            <textarea class="texts"  name="challenge" required></textarea>
        </label>
                                                <label class="password">
            <span class="label-text">Solution</span>
            <textarea class="texts"  name="solution" required></textarea>
        </label>
                                                <label class="password">
            <span class="label-text">Outcome</span>
            <textarea class="texts"  name="outcome" required ></textarea>
        </label>

                                                <div class="text-center">
                                                    <button type="submit" class="submit">SAVE CHANGES</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-8 about-details">
                                    <div class="single-about-detail">
                                        <div class="">
                                            <h3>ADD CLIENTELLE'S SLIDESHOW</h3>
                                            <br>

                                            <div style="width: 100%;">

                                                <form action="addimages.php" method="post" enctype="multipart/form-data" class="dropzone" id="my-dropzone" style="min-height: 350px; border: dotted 2px black; color: black">
                                                    <br>
                                                    <div class="fallback" style="position: relative;color: black">
                                                        <input name="file" type="file" multiple />
                                                    </div>

                                                </form>

                                                <div class="col-md-8 col-md-offset-2 text-center">
                                                    <br>
                                                    <button class="btn btn-large" id="submit-all">Upload Photos</button>
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
                </section>
            </div>
            <style>
                .about-details .texts {
                    background: none;
                    border: none;
                    line-height: 1em;
                    font-weight: 300;
                    padding: 0.125em 0.25em;
                    width: 520px;
                    border-bottom: 1px solid black;
                }

                .about-details .submit {
                    margin-bottom: 20px;
                }

                .about-details {
                    /*                    margin-left: 280px;*/
                    margin-top: 40px;
                    border-top: 2px solid #fff;
                    transition: all .7s ease 0s;
                    -webkit-transition: all .7s ease 0s;
                    -moz-transition: all .7s ease 0s;
                    -o-transition: all .7s ease 0s;
                    -ms-transition: all .7s ease 0s;
                    transition: all, 0.3s;
                    box-shadow: 5px 4px 5px grey;
                    vertical-align: middle;
                    -webkit-transform: perspective(1px) translateZ(0);
                    transform: perspective(1px) translateZ(0);
                    -webkit-transition-duration: 0.3s;
                    transition-duration: 0.3s;
                    -webkit-transition-property: transform;
                    transition-property: transform;

                }

            </style>






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
