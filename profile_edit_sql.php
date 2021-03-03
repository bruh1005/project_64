<?php
include('connect.php');
$user_id=$_POST['user_id'];
$usr=$_POST['usr'];
$pwd =$_POST['pwd'];
$dep_id =$_POST['dep_id'];
$p_id=$_POST['pos_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone =$_POST['phone'];

// UPDATE user SET 
// 				username = '$usr',
// 				password = '$pwd',
//                 department_id = '$dep_id',
//                 p_id = '$p_id',
//                 fanme = '$fname',
//                 lname = '$lname',
//                 phone = '$phone',
//                 status = '$status',
// 				WHERE user_id = '$user_id'
				

$sql = "

                UPDATE  user  SET    username ='$usr',
                                     password ='$pwd',
                                     department_id ='$dep_id',
                                     p_id ='$p_id',
                                     fname ='$fname',
                                     lname ='$lname',
                                     phone ='$phone'
                                     
                WHERE user_id = '$user_id' ;";
                $res = $conn->query($sql) ;    

if($sql){
	header('location: profile.php');
}else{
	echo 'Can not Update!';
}
?>