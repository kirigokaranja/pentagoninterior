<?php
session_start();
if(empty($_SESSION['username'])){
    ?>
    <script type="text/javascript">
        window.location.href = 'Login.php';
    </script>
    <?php
}else{
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
    <link rel="stylesheet" href="../css/book.css">
    <link rel="stylesheet" href="../css/book1.css">

    <!-- color scheme -->
    <link rel="stylesheet" href="../css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="../fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="../fonts/et-line-font/style.css" type="text/css">

<body id="homepage">

<div id="wrapper">

    <div id="content" class="no-bottom no-top">
        <br>
        <section id="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                        <h1>Add new Designer</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                <center>
                    <div class="newcontainer">

                        <div class="row body" style="width: 40%;">
                            <form method="post" action="actions/addmanager.php">

                 <span class="input input--hoshi">
                                    <input type="text" readonly style="border: none" title="">
                          <input class="input__field input__field--hoshi" type="text" id="username" name="username" required  />
                          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="username">
                            <span class="input__label-content input__label-content--hoshi">New Designer UserName</span>
                          </label>
                        </span>

                                                <span class="input input--hoshi">
                                    <input type="email" readonly style="border: none" title="">
                          <input class="input__field input__field--hoshi" type="text" id="email" name="email" required  />
                          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
                            <span class="input__label-content input__label-content--hoshi">New Designer Email Address</span>
                          </label>
                        </span>

                                <div class="cta" style="margin-left: 30%">
                                    <button class="btn btn-primary pull-left" name="submit">
                                        Add Designer
                                    </button></div>

                            </form>
                        </div>
                    </div>
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
                            <li><a href="Logout.php">Logout</a></li>
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
            <a href="index.php" class="active">Add Client</a>
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
<?php }?>