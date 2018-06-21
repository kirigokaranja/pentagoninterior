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
                        <h1>User Message</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                <center>
                    <div class="newcontainer">
                        <div class="row header">
                            <h3></h3>
                        </div>
                        <?php
                        include('connection.php');
                        if (isset($_GET['id'])){
                            $id = $_GET['id'];
                        }
                        $sql3="SELECT * FROM `messages` WHERE `id`='$id'";
                        $data=mysqli_query($conn,$sql3);
                        while($fetch=mysqli_fetch_assoc($data)){
                            $name=$fetch['Names'];
                            $service=$fetch['service'];
                            $Email=$fetch['Email'];
                            $Message=$fetch['Message'];
                        }
                        ?>
                        <div class="row body">
                            <form method="post" action="">
                                <ul>
                                    <p class="old">
                                        <br>
                                        <label for="first_name">Names:</label>
                                        <input class="texts" type="text" name="username" placeholder="" value="<?php echo $name;?>"/><br>
                                    </p>
                                    <p class="new">
                                        <label for="last_name"> Email Address:  </label>
                                        <input class="texts" type="email" name="email" placeholder="" value="<?php echo $Email;?>"/><br>
                                    </p>
                                    <p class="old">
                                        <br>
                                        <label for="first_name">Requested Service:</label>
                                        <input class="texts" type="text" name="username" placeholder="" value="<?php echo $service;?>"/><br>
                                    </p>
                                    <p class="old">
                                        <br>
                                        <label for="first_name">Message:</label>
                                        <input class="texts" type="text" name="username" placeholder="" value="<?php echo $Message;?>"/><br>
                                    </p>
                                </ul>
                            </form>
                            <hr>
                            <h4>Response</h4>
                            <input type="button" value="accept" name="accepted" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                            <input type="button" value="reject" name="rejected" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">
                        </div>
                    </div>
                </center>
            </div>

            <!--        Modal Accept-->
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Accept
                                <?php echo $name;?>'s request</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="color: #18191b">Choose Designer for this Job </label>
                                    <select class="forms6" name="Designers" style="color: #18191b">
                                        <?php
                                        $designers="SELECT * FROM `designers`";
                                        $run=mysqli_query($conn,$designers);
                                        while($fetch_designers=mysqli_fetch_assoc($run)){
                                            $DesignerEmail=$fetch_designers['Email'];
                                            $DesignerName=$fetch_designers['Names'];
                                            echo "<option value='$DesignerEmail'>$DesignerEmail</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" style="color: #18191b">Enter message for the designer</label>
                                    <textarea class="form-control" id="exampleInputReason" name="DesignerMessage" required></textarea>
                                </div>
                                <button class="btn colors btn-block" name="Foward">Foward Project</button>
                                <?php
                                if(isset($_POST['Foward'])){
                                    $designing=$_POST['Designers'];
                                    $MessageDesign=$_POST['DesignerMessage'];

                                    $sql1="DELETE FROM `messages` WHERE `id`='$id'";
                                    mysqli_query($conn,$sql1);

                                    require_once('PHPMailer-master/PHPMailerAutoload.php');
                                    $mailer1= new PHPMailer();
                                    $mailer1->isSMTP();
                                    $mailer1->SMTPAuth=true;
                                    $mailer1->SMTPSecure='ssl';
                                    $mailer1->Host='smtp.gmail.com';
                                    $mailer1->Port='465';
                                    $mailer1->isHTML();
                                    $mailer1->Username='csprojecttest2017@gmail.com';
                                    $mailer1->Password='Shitanda1997';
                                    $mailer1->SetFrom('no-reply@howcode.org');
                                    $mailer1->Subject='PENTAGON INTERIOR NEW PROJECT';
                                    $mailer1->Body=$MessageDesign;
                                    $mailer1->AddAddress($designing);
                                    $mailer1->Send();

                                    $mailer= new PHPMailer();
                                    $mailer->isSMTP();
                                    $mailer->SMTPAuth=true;
                                    $mailer->SMTPSecure='ssl';
                                    $mailer->Host='smtp.gmail.com';
                                    $mailer->Port='465';
                                    $mailer->isHTML();
                                    $mailer->Username='csprojecttest2017@gmail.com';
                                    $mailer->Password='Shitanda1997';
                                    $mailer->SetFrom('no-reply@howcode.org');
                                    $mailer->Subject='PENTAGON INTERIOR APPLICATION RESPONSE';
                                    $mailer->Body='Hello '.$name.' , we are happy to inform you that your application has been accepted. Please keep in touch as we will soon communicate with you for more details. For any information or changes please visit us on our website www.pentagoninterior.com. Warm regards';
                                    $mailer->AddAddress($Email);
                                    $mailer->Send();

                                    header('Location:index.php');
                                }
                                ?>
                                <style>
                                    .colors {
                                        padding-bottom: 5px;
                                        padding-top: 5px;
                                        background-color: #FAA612;
                                        color: white;
                                    }

                                    .colors:hover {
                                        color: #FAA612;
                                        background-color: black;
                                    }

                                </style>
                                <br>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Reject
                                <?php echo $name;?>'s request</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <label for="exampleInputReason" style="color: #18191b">Enter Reason for rejecting this application</label>
                                    <textarea class="form-control" id="exampleInputReason" name="Reason" required></textarea>
                                </div>
                                <button class="btn colors btn-block" name="Confirm">Confirm</button>
                                <?php
                                if(isset($_POST['Confirm'])){
                                    $Reason=$_POST['Reason'];
                                    $sql2="DELETE FROM `messages` WHERE `id`='$id'";
                                    mysqli_query($conn,$sql2);

                                    require_once('PHPMailer-master/PHPMailerAutoload.php');
                                    $mailer= new PHPMailer();
                                    $mailer->isSMTP();
                                    $mailer->SMTPAuth=true;
                                    $mailer->SMTPSecure='ssl';
                                    $mailer->Host='smtp.gmail.com';
                                    $mailer->Port='465';
                                    $mailer->isHTML();
                                    $mailer->Username='csprojecttest2017@gmail.com';
                                    $mailer->Password='Shitanda1997';
                                    $mailer->SetFrom('no-reply@howcode.org');
                                    $mailer->Subject='PENTAGON INTERIOR APPLICATION RESPONSE';
                                    $mailer->Body='Hello '.$name.' , we are sorry to inform you that your request for the '.$service.' service(s) has been declined on the grounds that: '.$Reason.'. Feel free to contact us on our website www.pentagoninterior.com.';
                                    $mailer->AddAddress($Email);
                                    $mailer->Send();

                                    header('Location:index.php');
                                }
                                ?>
                                <style>
                                    .colors {
                                        padding-bottom: 5px;
                                        padding-top: 5px;
                                        background-color: #FAA612;
                                        color: white;
                                    }

                                    .colors:hover {
                                        color: #FAA612;
                                        background-color: black;
                                    }

                                </style>
                                <br>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
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
            include('connection.php');
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