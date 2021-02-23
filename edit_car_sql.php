<?php
include('connect.php');

$car_id=$_POST['car_id'];
$type =$_POST['type'];
$province =$_POST['province'];
$brand=$_POST['brand'];
$capacity=$_POST['capacity'];
$carstatus=$_POST['carstatus'];

	$sql = "UPDATE cars SET `type` = '$type',
    province = '$province',
    brand = '$brand',
    capacity = '$capacity',
    carstatus = '$carstatus'
    WHERE car_id = '$car_id' "; 
    //echo $sql ;
    $res = $conn->query($sql) ;

	if ($res){
        ?>
        <script>
        alert("แก้ไขข้อมูลยานพาหนะ");
        window.location='tablecars.php';
        </script>
        <?php 
		}
		else {
            ?>
        <script>
        alert("แก้ไขข้อมูลยานพาหนะไม่สำเร็จ");
        window.history.back();
        </script>
        <?php 	
	}



?>