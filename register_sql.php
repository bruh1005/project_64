<?php
include("connect.php");
$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$telephone=$_POST['telephone'];
$psn=$_POST['psn'];
$department=$_POST['department'];

$sql2="select * from user";
$res2=$conn->query($sql2);
$row2=$res2->fetch_assoc();
    if($username==$row2['username']) {
        ?>
        <script>
        alert("มีคนใช้ชื่อนี้แล้ว กรุณาเปลี่ยนชื่อผู้ใช้ใหม่");
        window.history.back();
        </script>
        <?php 
    }
    else {
            $sql="insert into user values('','$username','$password','$department','$psn','$fname','$lname','$telephone','user')";
            //echo $sql;
            if($res=$conn->query($sql)) {
                header('location:login.php');
            }
            else{
                ?>
                <script>
                alert("เพิ่มข้อมูลไม่สำเร็จ");
                window.history.back();
                </script>
                <?php 
            }
    }
?>