<?php
include('connect/connect.php');
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
$res=$conn->query($sql);
$row=$res->fetch_assoc();
$_SESSION['user_id']=$row['user_id'];
$_SESSION['status']=$row['status'];
// print_r($row);
// exit;
if ($row!=0) {
            if ($_SESSION['status']=="admin") {
                ?>
                <script>
                window.location='index.php';
                </script>
                <?php 
            }
            if ($_SESSION['status']=="officer") {
                ?>
                <script>
                window.location='index.php';
                </script>
                <?php 
            }
            if ($_SESSION['status']=="driver") {
                ?>
                <script>
                window.location='index.php';
                </script>
                <?php 
            }
            if ($_SESSION['status']=="user") {
                ?>
                <script>
                window.location='index.php';
                </script>
                <?php 
            }
            
        }
else{
 header( "location:login.php?error=1" );
 exit(0);
}


?>