<?php
include('connect.php');
$user_id=$_POST['user_id'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

if($password1==$password2){
    $sqlp = "UPDATE  user  SET password ='$password2' , statuspass ='".เปลี่ยนแล้ว."'
    WHERE user_id = '$user_id' ;";
    $resp = $conn->query($sqlp) ;

    $sql="SELECT * FROM user WHERE user_id = $user_id ";
    $res=$conn->query($sql);
    $row=$res->fetch_assoc();
    // print_r($row);
    // exit;
    if ($row!=0) {
                if ($_SESSION['status']=="admin") {
                    ?>
                    <script>
                    alert("เปลี่ยนรหัสผ่านถูกต้อง");
                    window.location='index.php';
                    </script>
                    <?php 
                }
                if ($_SESSION['status']=="driver") {
                    ?>
                    <script>
                    alert("เปลี่ยนรหัสผ่านถูกต้อง");
                    window.location='index.php';
                    </script>
                    <?php 
                }
                if ($_SESSION['status']=="user") {
                    ?>
                    <script>
                    alert("เปลี่ยนรหัสผ่านถูกต้อง");
                    window.location='index.php';
                    </script>
                    <?php 
                }
                
            }else{
        header( "location:login.php?error=1");
        exit(0);
        }
}else{
    ?>
    <script>
    alert("กรุณากรอกรหัสให้ตรงกัน");
    window.history.back();
    </script>
    <?php 
}
 

?>