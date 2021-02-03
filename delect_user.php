<?php
require("connect.php");
$user_id=$_GET['user_id'];
$sql="delete from user where user_id='$user_id'";
if ($res=$conn->query($sql)){
    header('location:tableuser.php');
}
?>