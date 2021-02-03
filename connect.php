<?php

$server="localhost";
$username="root";
$pass="12345678";
$db="crs";

$conn=mysqli_connect($server,$username,$pass,$db);

session_start();
    if (isset($_SESSION['user_id'])!="") {
        $user_id=$_SESSION['user_id'];
    }
    if (isset($_SESSION['username'])!="") {
        $username=$_SESSION['username'];
    }
    if (isset($_SESSION['status'])!="") {
        $status=$_SESSION['status'];
    }

?>