<?php
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
$res=$conn->query($sql);
$row=$res->fetch_assoc();
$user_id=$row['user_id'];
$_SESSION['user_id']=$row['user_id'];
$_SESSION['status']=$row['status'];
$_SESSION['statuspass']=$row['statuspass'];
// print_r($row);
// exit;
if ($row!=0) {
        if($_SESSION['statuspass']=="ยังไม่ได้เปลี่ยน"){
            ?>
                <script>
                alert("กรุณาเปลี่ยนรหัสผ่าน เพื่อความปลอดภัยในการใช้งานระบบ")
                window.location='repass.php';
                </script>
                <?php 
        }
            if ($_SESSION['status']=="admin") {
                ?>
                <script>
                window.location='index.php';
                </script>
                <?php 
            }
            if ($_SESSION['status']=="driver") {
                ?>
                <script>
                window.location='index_driver.php';
                </script>
                <?php 
            }
            if ($_SESSION['status']=="user") {
                ?>
                <script>
                window.location='index_user.php';
                </script>
                <?php 
            }
            
        }
else{
 header( "location:login.php?error=1" );
 exit(0);
}


?>