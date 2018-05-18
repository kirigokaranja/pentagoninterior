<html>
<head>
    <script src="../dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../dist/sweetalert.css">
    <style>body{background-image: url("../images/wide3.jpg")}</style>

</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 03/05/2018
 * Time: 21:35
 */
session_start();
require('connection.php');
$userid = $_SESSION['uid'];
$images = $_FILES['file']['name'];

$folder1 = "client/";
$images = $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], "$folder1".$_FILES["file"]["name"]);

$date = date('Y-m-d');

//insert client info into client table
$sql3 = "INSERT INTO `clientimage`(`image_name`, `client_id`, `date`) VALUES ('$images', '$userid', '$date')";
$result3 = $conn->query($sql3);

if ($result3){
  ?>
    <script>
        swal({
            title: "Success",
            text: "Upload successful!",
            type: "success",
            timer: 1500,
            showConfirmButton: false
        });
        setTimeout(function () {
            location.href = "client.php"
        }, 1000);
    </script>
    <?php
}else{
    ?>
    <script>
        swal({
            title: "Error",
            text: "An error ocurred!",
            type: "error",
            timer: 1500,
            showConfirmButton: false
        });
        setTimeout(function () {
            location.href = "image.php"
        }, 1000);
    </script>
    <?php
}


