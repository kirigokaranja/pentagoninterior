
<html>
<head>
    <script src="../../dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/sweetalert.css">
    <style>body{background-image: url("../../images/wide3.jpg")}</style>

</head>
<body>
<?php
include('../connection.php');
if(isset($_POST['submit'])){

    $User=$_POST['username'];
    $Pass=$_POST['email'];


        $sql="INSERT INTO `designers`(`Email`, `Names`) VALUES ('$User','$Pass')";
        if(mysqli_query($conn,$sql)){
            ?>
            <script>
                swal({
                    title: "Success",
                    text: "Designer added successfully!",
                    type: "success",
                    timer: 1500,
                    showConfirmButton: false
                });
                setTimeout(function () {
                    location.href = "../index.php"
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
                    location.href = "../manager.php"
                }, 1000);
            </script>
            <?php

        }

}
?>

