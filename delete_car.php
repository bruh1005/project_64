<?php
require("connect.php");
$car_id=$_GET['car_id'];
$sql="delete from cars where car_id='$car_id'";
if ($res=$conn->query($sql)){
    header('location:tablecars.php');
}
?>