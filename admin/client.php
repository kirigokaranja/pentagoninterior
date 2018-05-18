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


    <!-- custom background -->
    <link rel="stylesheet" href="../css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="../css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="../fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="../fonts/et-line-font/style.css" type="text/css">
    <link rel="stylesheet" href="../css/login.css">

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
                            <li><a href="#">Logout</a></li>
                            <li><a ><span style="font-size:30px;cursor: pointer" onclick="openNav()">&#9776;</span></a></li>
                        </ul>
                    </nav>

                </div>
                <!-- mainmenu close -->

            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <button class="dropdown-btn">Gallery
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="images.php">Add Image</a>
                <a href="#">Manage Images</a>
            </div>
            <a href="#">Clients</a>
            <button class="dropdown-btn" >Clientelle
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="client.php" class="active">Add Client</a>
                <a href="#">Manage Client</a>
            </div>
            <a href="#">Contact</a>
        </div>
    </header>
</div>
<div class="containerform">
    <img src='' width=200px; height=100px; id="output_image" class='image' style=" width:100px; margin-left: 35%; background-color: white" alt="Logo Image">
    <form method="post" action="addclient.php" enctype="multipart/form-data">

        <label class="password">
            <input type="file" name="myimage"  onchange="preview_image(event)"><br>
        </label>
        <label class="password">
            <span class="label-text">Client Name</span>
            <input type="text" name="clientname"required/>
        </label>
        <label class="password">
            <span class="label-text">Year</span>
            <input type="text" name="year" required/>
        </label>
        <label class="password">
            <span class="label-text">Challenge</span>
            <textarea  name="challenge" required style="background: transparent;border: none"></textarea>
        </label>
        <label class="password">
            <span class="label-text">Solution</span>
            <textarea  name="solution" required style="background: transparent;border: none"></textarea>
        </label>
        <label class="password">
            <span class="label-text">Outcome</span>
            <textarea  name="outcome" required style="background: transparent;border: none"></textarea>
        </label>

        <div class="text-center">
            <button type="submit" class="submit">SAVE CHANGES</button>
        </div>
    </form>




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