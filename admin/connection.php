<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 03/05/2018
 * Time: 19:35
 */

$Host_Name = 'sql2.freemysqlhosting.net';
$Database_User = 'sql2242570';
$Password = 'zT5%rA9!';
$Database_Name = 'sql2242570';

$conn = mysqli_connect($Host_Name,$Database_User,$Password,$Database_Name);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
