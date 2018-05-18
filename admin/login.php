<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 11/05/2018
 * Time: 14:08
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login Page with security measures implemented ">
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/logn.css">


</head>

<body>
<div class="container">

    <h1 class="text-center">Login</h1>
    <form method="post" action="login.php">
        <label class="col-one-half">

        </label>
        <label class="col-one-half">

        </label>
        <label>
            <span class="label-text">Username</span>
            <input type="text" name="username" required>
        </label>
        <label class="password">
            <span class="label-text">Password</span>
            <input type="password" name="password" required>
        </label>

        <div class="text-center">
            <button class="submit" type="submit" name="Login">Login</button>
        </div><br>
    </form>
</div>
<?php
session_start();
include "connection.php";
global $conn;
if(isset($_POST['Login'])){
    $User=$_POST['username'];
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
</body>
</html>
