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
include("css.php");

?>
 <div class="container" style="margin-top:0px">
     <div class="row">
         <div class="col-md-4"></div>
                <div class="col-md-6">
                    <div class="col-md-8">
                        <div class="card">
                        <div class="bg-dark text-white">
                        <center><h3 style="margin: 15px">ระบบงานสารสนเทศ <br> การจองรถ <br> วิทยาลัยเทคนิคชลบุรี</h3></center>
                        </div>
                        <br>
                        <img src="assets/img/download.png" class="mx-auto d-block" width="50%">
                        <br>
                        <form action="chkrename.php" method="post" class="container" id="passwordForm">
                        <div class="form-group">
                            <label for="username">ชื่อผู้ใช้งาน :</label>
                            <input id="username" class="form-control" type="text" name="username"  required><br>
                            <label for="username">รหัสผ่านใหม่ :</label>
                            <input id="username" class="form-control" type="password" name="username"  required><br>
                            <label for="password">ยืนยันรหัสผ่านใหม่ :</label>
                            <input id="password" class="form-control" type="password" name="password" required>
                        </div>
                        <?php
                        if($_GET['error']!=null){ ?>
                            <div class="alert alert-danger text-center hide-it" role="alert">
                        <?php
                            if($_GET['error']==1){
                                echo " ไม่มีข้อมูลผู้ใช้งานในระบบ ";
                            } 
                            ?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="float-right">
                        <input type="submit" value="เข้าสู่ระบบ" class="btn btn-success"><br>
                        <a href="http://"></a>
                        </div>
                        </form>
                        
                        <br>
                    </div>
                    </div>
                </div>
     </div>
 </div>
 <script src="assets/js/core/jquery.min.js"></script>
 <script>
    $(document).ready(function() {
        $(".hide-it").fadeOut(2000);
    });


    
 </script>

 