<?php
include('connect.php');

$d_fname=$_POST['d_fname'];
$d_lname =$_POST['d_lname'];
$d_phone =$_POST['d_phone'];
$driver_no=$_POST['driver_no'];


	$sql = "INSERT INTO `drivers` VALUES('','$d_fname','$d_lname','$d_phone','$driver_no')";
    $res = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($conn);

	if ($res){
        ?>
        <script>
        alert("เพิ่มข้อมูลสำเร็จ");
        window.location='tabledriver.php';
        </script>
        <?php 
		}
		else {
            ?>
        <script>
        alert("เพิ่มข้อมูลไม่สำเร็จ");
        window.history.back();
        </script>
        <?php 	
	}



?>