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
    <link rel="stylesheet" href="../css/sidebar.css" type="text/css">

    <script src="../dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../dist/sweetalert.css">
    <!-- custom background -->
    <link rel="stylesheet" href="../css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="../css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="../fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="../fonts/et-line-font/style.css" type="text/css">
    <style>
        label {
            font-size: 16px;
        }

        .texts {
            margin-bottom: 20px;
            background: none;
            border: none;
            line-height: 1em;
            font-weight: 300;
            padding: 0.125em 0.25em;
            width: 320px;
            border-bottom: 1px solid black;
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

<body id="homepage">

<div id="wrapper">

    <div id="content" class="no-bottom no-top">
        <br>
        <section id="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                        <h1>Messages and Services</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>
                </div>

                <center>
                    <table>
                        <tr>
                            <th>Names</th>
                            <th>Emailaddress</th>
                            <th>Service</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        include('connection.php');
                        $sql5="SELECT * FROM `messages`";
                        $data5=mysqli_query($conn,$sql5);
                        while($tabledata5=mysqli_fetch_assoc($data5)){
                            $Names=$tabledata5['Names'];
                            $Email=$tabledata5['Email'];
                            $ID5=$tabledata5['id'];
                            $Message=$tabledata5['Message'];
                            $service=$tabledata5['service'];
                            echo"<tr>";
                            echo"<td>{$Names}</td>";
                            echo"<td>{$Email}</td>";
                            echo"<td>{$service}</td>";
                            echo"<td><a href='ViewMessage.php?id={$ID5}'><input type='button' class='btn22' value='View'></a></td>";
                            echo"</tr>";
                        } ?>
                        <style>
                            .table {
                                border-collapse: collapse;
                                width: 100%;
                                overflow-x: auto;
                                overflow-y: auto;
                                height: 600px;
                                margin-left: 15px;
                            }

                            th,
                            td {
                                text-align: left;
                                padding: 8px;
                                color: #18191b;
                            }

                            tr:nth-child(even) {
                                background-color: #EEEDED;
                            }

                            tr:hover {
                                background-color: #FAA612;
                                color: white;
                                cursor: pointer;
                            }

                            th {
                                background-color: black;
                                color: white;
                            }

                        </style>
                    </table>
                </center>

            </div>

        </section>
    </div>


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
                            <li><a href="#">Logout</a></li>
                            <li><a ><span style="font-size:30px;cursor: pointer" onclick="openNav()">&#9776;</span></a></li>
                        </ul>
                    </nav>

                </div>
                <!-- mainmenu close -->

            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <?php
            $messages="SELECT * FROM `messages`";
            $result_message=mysqli_query($conn,$messages);
            $count=mysqli_num_rows($result_message);
            ?>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <button class="dropdown-btn">Gallery
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="images.php">Add Image</a>
                <a href="managegallery.php">Manage Images</a>
            </div>
            <a href="manager.php">Add Designer</a>
            <button class="dropdown-btn" >Clientelle
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="index.php" class="active">Add Client</a>
                <a href="manageclient.php">Manage Client</a>
            </div>
            <a href="Message.php">Messages <span class="badge" id="spaner"><?php if($count !== 0){
                        echo $count ;
                    }?></span></a>
        </div>
        <style>
            #spaner {
                background-color: #FAA612;
                color: black;
                font-size: 16px;
                margin-left: 5px;
            }

        </style>
    </header>
</div>
<div class="containerform">




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
<script src="../js/sidebar.js"></script>
<script type="text/javascript">

    function preview_image(event)
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
</body>
</html>