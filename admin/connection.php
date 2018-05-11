<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 03/05/2018
 * Time: 19:35
 */

$Host_Name = 'localhost';
$Database_User = 'root';
$Password = '';
$Database_Name = 'pentagoninterior';

$conn = mysqli_connect($Host_Name,$Database_User,$Password,$Database_Name);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
