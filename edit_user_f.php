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
                
                <form class="was-validated" action="edit_user_sql.php" method= "post" >
                <br>
                <input type="hidden" name="user_id" value="<?=$row['user_id']; ?>">
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
                <input type="hidden" id="chkd" value="<?php echo $row['department_id'] ?>">
                <select class="custom-select" name="dep_id" >
                    <?php
                        $sqldep = "select * from department";
                        $resdep = mysqli_query($conn,$sqldep);
                        while($rowdep = mysqli_fetch_assoc($resdep)){       
                    ?>
                <option id="<?php echo $rowdep['department_id']; ?>" value="<?php echo $rowdep['department_id'] ?>"><?php echo $rowdep['department_name'] ?></option>
                <?php
                 };
                ?>
                </select>
                </div>

                <div class="form-group">
                <label for="pos_id" class="bmd-label-floating">เลือกตำแหน่ง:</label>
                <!-- <input type="hidden" id="##" value="<?php echo $row['p_id'] ?>"> -->
                <select class="custom-select" name="pos_id" >
                    <?php
                        $sqlpos = "select * from position";
                        $respos = mysqli_query($conn,$sqlpos);
                        while($rowpos = mysqli_fetch_assoc($respos)){       
                    ?>
                <option <?php if($row['p_id'] == $rowpos['p_id']){ echo 'selected'; } ?> value="<?php echo $rowpos['p_id'] ?>"><?php echo $rowpos['p_name'] ?></option>
                <?php
                 }
                ?>
                </select>
                </div>              

                <div class="form-group">
                <label for="status" class="bmd-label-floating">เลือกสถานะ:</label>
                <input type="hidden" id="chks" value="<?php echo $row['status'] ?>">
                <select class="browser-default custom-select" name="status"  required>
                
                <option id='admin' value='admin'>admin</option>
                <option id='user' value='user'>user</option>
                <option id='officer' value='officer'>officer</option>
                <option id='driver' value='driver'>driver</option>
                </select>
                </div>

                <input class="btn btn-success btn-round" type="submit" value="ยืนยัน">
                </form>


                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
<script>

    $(document).ready(function(){
        document.getElementById($('#chkd').val()).selected = "true";
    });

    $(document).ready(function(){
        document.getElementById($('#chkp').val()).selected = "true";
    });

   

    $(document).ready(function(){
        document.getElementById($('#chks').val()).selected = "true";
    });
  




</script>