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
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="pwd" class="bmd-label-floating">รหัสผ่าน:</label><br>
                <input type="password" class="form-control" name="pwd" value="<?=$row['password']; ?>" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="fname" class="bmd-label-floating">ชื่อ:</label>
                <input type="text" class="form-control" name="fname" value="<?=$row['fname']; ?>" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="fname" class="bmd-label-floating">นามสกุล:</label>
                <input type="text" class="form-control" name="lname" value="<?=$row['lname']; ?>" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="phone" class="bmd-label-floating">เบอร์โทรศัพท์:</label>
                <input type="text" class="form-control" name="phone" value="<?=$row['phone']; ?>" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="dep_id" class="bmd-label-floating">เลือกแผนก:</label>
                <select class="custom-select" name="dep_id"  required>
            <?php
                $sql1 = "SELECT * FROM department";
                $res1 = mysqli_query($conn,$sql1);
                $rowdep1 = mysqli_fetch_assoc($res1);

                $dep_id =$row['department_id'] ;
                $sqldep = "SELECT department_name FROM department WHERE department_id =$dep_id ";
                $resdep=mysqli_query($conn,$sqldep);
                $rowdep = mysqli_fetch_assoc($resdep);
                
            
                
            ?>
                <option value="<?=$row['department_id']; ?>"><? $row['department_id'] ?></option>
                
            <?php
                
                 while($row1 = mysqli_fetch_assoc($res1)){
                    
            ?>
                <option value="<?php echo $row1['dapartment_id'] ?>"><?php echo $row1['department_name'] ?></option>
            <?php
                 }
            ?>
                </select>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
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
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
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
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div>

                <input class="btn btn-success btn-round" type="submit" value="เพิ่มสมาชิก">
                </form>


                </div>
            </div>
            </div>
        </div>
<script>
// $("#user").focusout(function(){
//     var username = $("#user").val();
//     $.ajax({
//     type: "POST",
//     url: "chkusr.php",
//     data:{ name: username },
//     success: function(result) {
//     }
//     });
    
// });

</script>