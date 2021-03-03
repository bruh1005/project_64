<?php
require("connect.php");
$driver_id=$_GET['driver_id'];
$sql="delete from drivers where driver_id='$driver_id'";
if ($res=$conn->query($sql)){
    header('location:tabledriver.php');
}
?>