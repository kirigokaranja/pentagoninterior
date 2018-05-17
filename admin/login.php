<head>
    <title>Adminitstrator Login Module</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input class="form-control" id="exampleInputEmail1" name="Username" type="text" placeholder="Enter Username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary btn-block" name="Login">Login</button>
                    <br>
                </form>
                <div class="text-center">
                    <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
    <?php
 session_start();
include "connection.php";
if(isset($_POST['Login'])){
    $User=$_POST['Username'];
    $Pass=$_POST['password'];
    
    $query="SELECT `username`, `password` FROM `users` WHERE `username`='".$User."' AND `password`='".$Pass."'";
    $Results=mysqli_query($conn,$query);
     $counter= mysqli_num_rows($Results);
    if($counter > 0){
        ?>
        <script type="text/javascript">
            window.location.href = 'index.php';

        </script>
        <?php
    }else{
        echo "<script type='text/javascript'>alert('Sorry username does not exist');</script>";
    }
} ?>
            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
