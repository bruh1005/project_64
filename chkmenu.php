<?php
session_start();
    if($_SESSION['status']=='admin') {
        include("menu_admin.php");
    }
    if($_SESSION['status']=='user') {
        include("menu_user.php");
    }
    if($_SESSION['status']=='driver') {
        include("menu_driver.php");
    }
    if($_SESSION['status']=='') {
        ?>
        <script>
        alert("คุณยังไม่ได้ล็อกอิน");
        window.location='login.php';
        </script>
        <?php 
    }
?>

