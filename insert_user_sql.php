<?php
include('connect.php');


$urs_id=$_POST['usr_id'];
$usr=$_POST['usr'];
$pwd =$_POST['pwd'];
$dep_id =$_POST['dep_id'];
$p_id=$_POST['pos_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone =$_POST['phone'];
$status=$_POST['status'];

$sql = "insert into user values('$urs_id','$usr','$pwd','$dep_id','$p_id','$fname','$lname','$phone','$status')";

if (mysqli_query($connect, $sql)) {
    header('location:insert_user_sql.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);




?>