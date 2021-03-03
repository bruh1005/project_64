<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/icons/icons8.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Car Reservation System
  </title>
  <?php

session_start();
include("connect.php");
include("css.php");
include("script.php");
 ?>
 <div class="container" style="margin-top:0px">
     <div class="row">
         <div class="col-md-4"></div>
                <div class="col-md-6">
                    <div class="col-md-8">
                        <div class="card">
                        <div class="bg-dark text-white">
                        <center><h3 style="margin: 15px">ระบบงานสารสนเทศ <br> การจองรถ <br> แก้ไขรหัสผ่าน</h3></center>
                        </div>
                        <br>
                        <img src="assets/img/download.png" class="mx-auto d-block" width="50%">
                        <br>
                        <form action="chkloginp.php" method="post" class="container">
                        <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                            <label for="password1">รหัสผ่านใหม่ :</label>
                            <input id="password1" class="form-control" type="type" name="password1" placeholder="รหัสผ่านใหม่" required><br>
                            <label for="password2">ยืนยันรหัสผ่านใหม่ :</label>
                            <input id="password2" class="form-control" type="type" name="password2" placeholder="ยืนยันรหัสผ่านใหม่" required>
                        <br>
                        <div class="container text-right">
                        <input type="submit" value="แก้ไขรหัสผ่าน" class="btn btn-success"><br>
                        </div>
                        </form>
                        <br>
                    </div>
                    </div>
                </div>

     </div>
 </div>
 <script src="assets/js/core/jquery.min.js"></script>


 