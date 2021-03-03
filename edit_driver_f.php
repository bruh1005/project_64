<?php
include('connect.php');
include('css.php');
include('menu_admin.php');
include('script.php');
 

$driver_id = $_GET['driver_id'];
$sql = mysqli_query($conn,"SELECT * FROM drivers WHERE driver_id = '$driver_id' ");
$row = mysqli_fetch_assoc($sql);


?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title ">แก้ไขข้อมูลคนขับรถ</h4>
            </div>
           
            <div class="container card-body">
                
                <form class="was-validated" action="edit_driver_sql.php" method= "post" >
                <br>


                <input type="hidden" class="form-control" name="driver_id" value="<?=$row['driver_id']; ?>"  required>

                <div class="form-group">
                <label for="d_fname" class="bmd-label-floating">ชื่อ:</label>
                <input type="text" class="form-control" name="d_fname" value="<?=$row['d_fname']; ?>" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="d_lname" class="bmd-label-floating">นามสกุล:</label>
                <input type="text" class="form-control" name="d_lname" value="<?=$row['d_lname']; ?>" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="d_phone" class="bmd-label-floating">เบอร์โทรศัพท์:</label>
                <input type="text" class="form-control" name="d_phone" value="<?=$row['d_phone']; ?>" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="driver_no" class="bmd-label-floating">หมายเลขใบขับขี่:</label>
                <input type="text" class="form-control" name="driver_no" value="<?=$row['driver_no']; ?>" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                

                <input class="btn btn-success btn-round" type="submit" value="แก้ไขข้อมูล">
                </form>


                </div>
            </div>
            </div>
        </div>
