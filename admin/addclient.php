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
 * Time: 19:48
 */
session_start();
require('connection.php');
$upload_images = $_FILES['myimage']['name'];

$folder = "client/logo/";
$client_name= $_POST['clientname'];
$year = $_POST['year'];
$challenge = $_POST['challenge'];
$sol = $_POST['solution'];
$outcome = $_POST['outcome'];


//send logo image to the folder
$upload_images = $_FILES['myimage']['name'];
move_uploaded_file($_FILES['myimage']['tmp_name'], "$folder".$_FILES["myimage"]["name"]);

//insert client info into client table
$sql = "INSERT INTO `client`(`client_name`) VALUES ('$client_name');";
$result = $conn->query($sql);


//retrieve client id from the client table
$sq = "SELECT * FROM client WHERE client_name = '$client_name'";
$res = $conn->query($sq) or trigger_error($conn->error . "[$sq]");
if ($res && $row = $res->fetch_assoc()) {
    $userid = $row['client_id'];

    //send the logo details to the logo table
    $sql1 = "INSERT INTO `logo`(`logo_name`, `client_id`) VALUES ('$upload_images', '$userid')";
    $result1 = $conn->query($sql1);

    //insert client project info
    $sql2 = "INSERT INTO `project_details`( `client_id`, `year`, `challenge`, `solution`, `outcome`) VALUES ('$userid', '$year', '$challenge', '$sol', '$outcome')";
    $result2 = $conn->query($sql2);

    if ($result1 && $result2){
        $uid = $userid;
        $_SESSION['uid'] = $uid;
        ?>
<!--    <form method="post" action="image.php">-->
<!--        <input type="hidden" name="uid" value="--><?php //echo $userid;?><!--">-->
<!--    </form>-->
        <script>
            swal({
                title: "Success",
                text: "Upload successful!",
                type: "success",
                timer: 1500,
                showConfirmButton: false
            });
            setTimeout(function () {
                location.href = "image.php"
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
                location.href = "client.php"
            }, 1000);
        </script>
        <?php
    }

}





