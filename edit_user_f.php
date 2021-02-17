<?php
include('connect.php');
include('css.php');
include('menu_admin.php');
include('script.php');
 
$user_id = $_GET['user_id'];
$sql = mysqli_query($conn,"SELECT * FROM user WHERE user_id = '$user_id' ");
$row = mysqli_fetch_assoc($sql);

?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title ">แก้ไขข้อมูลผู้ใช้งาน</h4>
            </div>
           
            <div class="container card-body">
                
                <form class="was-validated" action="edit_user_sql.php?user_id=<?=$row['user_id']; ?>" method= "post" >
                <br>
                <div class="form-group">
                <label for="usr" class="bmd-label-floating">ชื่อผู้ใช้งาน:</label><br>
                <input type="text" class="form-control" name="usr" value="<?=$row['username']; ?>" required >
                </div><br>

                <div class="form-group">
                <label for="pwd" class="bmd-label-floating">รหัสผ่าน:</label><br>
                <input type="text" class="form-control" name="pwd" value="<?=$row['password']; ?>" required>
                </div><br>

                <div class="form-group">
                <label for="fname" class="bmd-label-floating">ชื่อ:</label>
                <input type="text" class="form-control" name="fname" value="<?=$row['fname']; ?>" required>
                </div><br>

                <div class="form-group">
                <label for="fname" class="bmd-label-floating">นามสกุล:</label>
                <input type="text" class="form-control" name="lname" value="<?=$row['lname']; ?>" required>
                </div><br>

                <div class="form-group">
                <label for="phone" class="bmd-label-floating">เบอร์โทรศัพท์:</label>
                <input type="text" class="form-control" name="phone" value="<?=$row['phone']; ?>" required>
                </div><br>

                <div class="form-group">
                <label for="dep_id" class="bmd-label-floating">เลือกแผนก:</label>
                <input type="hidden" id="chk" value="<?php echo $row['department_id'] ?>">
                <select class="custom-select" name="dep_id"  required>
                    <?php
                        $sqldep = "select * from department";
                        $resdep = mysqli_query($conn,$sqldep);
                        while($rowdep = mysqli_fetch_assoc($resdep)){       
                    ?>
                <option id="<?php echo $rowdep['department_id']; ?>" value="<?php echo $rowdep['dapartment_id'] ?>"><?php echo $rowdep['department_name'] ?></option>
                <?php
                 }
                ?>
                </select>
                </div>

                <div class="form-group">
                <label for="pos_id" class="bmd-label-floating">เลือกตำแหน่ง:</label>
                <select class="custom-select" name="pos_id" required>
                <option value="<?=$row['p_id']; ?>"><?=$row['p_id']; ?></option>
                <option value ="1">ผู้อำนวยการ</option>
                <option value ="2">รองผู้อำนวยการ</option>
                <option value ="3">อาจารย์</option>
                <option value ="4">เจ้าหน้าที่</option>
                </select>
                </div>

                <div class="form-group">
                <label for="staus" class="bmd-label-floating">เลือกสถานะ:</label>
                <select class="custom-select" name="status"  required>
                <option value="<?=$row['status']; ?>"><?=$row['status']; ?></option>
                <option value='admin'>admin</option>
                <option value='user'>user</option>
                <option value='officer'>officer</option>
                <option value='driver'>driver</option>
                </select>
                </div>

                <input class="btn btn-success btn-round" type="submit" value="เพิ่มสมาชิก">
                </form>


                </div>
            </div>
            </div>
        </div>
<script>

$(document).ready(function(){
        document.getElementById($('#chk').val()).selected = "true";
    });


</script>