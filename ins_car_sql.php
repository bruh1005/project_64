<?php
include('connect.php');

$car_id=$_POST['car_id'];
$type =$_POST['type'];
$province =$_POST['province'];
$brand=$_POST['brand'];
$capacity=$_POST['capacity'];
$carstatus=$_POST['carstatus'];

	$sql = "INSERT INTO `cars` VALUES('$car_id','$type','$province','$brand','$capacity','$carstatus')";
    $res = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($conn);

	if ($res){
        ?>
        <script>
        alert("เพิ่มข้อมูลยานพาหนะ");
        window.location='tablecars.php';
        </script>
        <?php 
		}
		else {
            ?>
        <script>
        alert("เพิ่มข้อมูลยานพาหนะไม่สำเร็จ");
        window.history.back();
        </script>
        <?php 	
	}



?>