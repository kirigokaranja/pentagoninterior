<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 03/05/2018
 * Time: 21:35
 */

require('connection.php');
$images = $_FILES['file']['name'];

$folder1 = "client/";
$images = $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], "$folder1".$_FILES["file"]["name"]);

$date = date('Y-m-d');

//insert client info into client table
$sql3 = "INSERT INTO `clientimage`(`image_name`, `client_id`, `date`) VALUES ('$images', '2', '$date')";
$result3 = $conn->query($sql3);

?>