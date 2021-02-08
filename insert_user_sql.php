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



    $sql = "INSERT INTO `user`VALUES ('$usr','$pwd','$dep_id','$p_id','$fname','$lname','$phone','$status')";

    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

    mysqli_close($conn);
	if ($result){
		echo "<script type='text/javascript'>";
		echo"alert('เพิ่มข้อมูลสำเร็จ');";
	    echo"window.location = 'insert_user_f.php';";
		echo "</script>";
		}
		else {
			//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
				echo "<script type='text/javascript'>";
				echo "alert('error!');";
				echo"window.location = 'insert_user_f.php'; ";
				echo"</script>";
	}







?>