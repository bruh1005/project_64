<?php
include('connect.php');

$usr=$_POST['usr'];
$pwd =$_POST['pwd'];
$dep_id =$_POST['dep_id'];
$p_id=$_POST['pos_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone =$_POST['phone'];
$status=$_POST['status'];


$sql = mysqli_query($conn,"UPDATE user SET 
				username = '$usr',
				password = '$pwd',
                department_id = '$dep_id',
                p_id = '$p_id',
                fanme = '$fname',
                lname = '$lname',
                phone = '$phone',
                status = '$status',
				WHERE user_id = '$user_id'
				");
if($sql){
	header('location: tableuser.php');
}else{
	echo 'Can not Update!';
}
?>