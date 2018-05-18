<html>
<head>
    <script src="../dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../dist/sweetalert.css">
    <style>body{background-image: url("../images/wide3.jpg")}</style>

</head>
<body>
<?php
include('connection.php');
global $conn;
    $Des = $_POST['description'];
    $target_dir = "Uploads/";

    $target_file = $target_dir . basename($_FILES["Upload"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $Attach_path=$_FILES['Upload']['name'];
    $sql="INSERT INTO `maingallery`(`Description`, `FileName`) VALUES ('".$Des."','".$Attach_path."')";

    if(mysqli_query($conn,$sql)){
        move_uploaded_file($_FILES["Upload"]["tmp_name"],$target_file);
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
        location.href = "images.php"
    }, 1000);
</script>
<?php


    }

?>