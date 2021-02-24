<?php
include('connect.php');

$driver_id=$_POST['driver_id'];
$d_fname =$_POST['d_fname'];
$d_lname =$_POST['d_lname'];
$d_phone=$_POST['d_phone'];
$driver_no=$_POST['driver_no'];


$sql = "

UPDATE  drivers  SET    d_fname ='$d_fname',
                     d_lname ='$d_lname',
                     d_phone ='$d_phone',
                     driver_no ='$driver_no'
WHERE driver_id = '$driver_id' ;";
$res = $conn->query($sql) ; 

	if ($res){
        ?>
        <script>
        alert("แก้ไขข้อมูลสำเร็จ");
        window.location='tabledriver.php';
        </script>
        <?php 
		}
		else {
            ?>
        <script>
        alert("แก้ไขข้อมูลไม่สำเร็จ");
        window.history.back();
        </script>
        <?php 	
	}



?>