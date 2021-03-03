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
include("script.php");

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
                        <form action="chklogin.php" method="post" class="container">
                        <div class="form-group">
                            <label for="username">ชื่อผู้ใช้งาน :</label>
                            <input id="username" class="form-control" type="text" name="username" placeholder="ชื่อผู้ใช้งาน (รหัสบัตรประชาชน)" required><br>
                        </div>
                        <div class="form-group">  
                            <label for="password">รหัสผ่านผู้ใช้งาน :</label>
                            <input id="password" class="form-control" type="password" name="password" placeholder="รหัสผ่าน (รหัสบัตรประชาชน)" required>
                        </div>
                        
                        <?php
                        if($_GET['error']!=null){ ?>
                            <div class="alert alert-danger text-center hide-it" role="alert">
                        <?php
                            if($_GET['error']==1){
                                echo " รหัสผ่านไม่ถูกต้อง ";
                            } 
                            ?>
                            </div>
                            <?php
                        }
                        ?><br>
                        <div class="container text-right">
                        <input type="submit" value="เข้าสู่ระบบ" class="btn btn-success"><br>
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
 
    $(".reveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});
 </script>

 