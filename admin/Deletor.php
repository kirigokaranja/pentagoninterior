<?php
include('connection.php');
if (isset($_GET['id'])){
$id = $_GET['id'];
}
$sql3="DELETE FROM `maingallery` WHERE `ID`='$id'";
mysqli_query($conn,$sql3);
header('Location:index.php');
?>
