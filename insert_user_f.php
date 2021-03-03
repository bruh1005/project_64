<?php
include('connect.php');
include('css.php');
include('menu_admin.php');
include('script.php');
 

?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title ">เพิ่มข้อมูลผู้ใช้งาน</h4>
            </div>
           
            <div class="container card-body">
                
                <form class="was-validated" action="insert_user_sql.php" method= "post" >
                <br>
                <div class="form-group">
                <label for="usr" class="bmd-label-floating">ชื่อผู้ใช้งาน:</label><br>
                <input type="text" class="form-control" id="user" name="usr" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="pwd" class="bmd-label-floating">รหัสผ่าน:</label><br>
                <input type="password" class="form-control" name="pwd" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="fname" class="bmd-label-floating">ชื่อ:</label>
                <input type="text" class="form-control" name="fname" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="lname" class="bmd-label-floating">นามสกุล:</label>
                <input type="text" class="form-control" name="lname" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="phone" class="bmd-label-floating">เบอร์โทรศัพท์:</label>
                <input type="text" class="form-control" name="phone" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="dep_id" class="bmd-label-floating">เลือกแผนก:</label>
                <select class="custom-select" name="dep_id" required>
                <option value="">-----โปรดเลือก-----</option>
                <?php
      $sql1 = "SELECT * FROM department";
      $res1 = mysqli_query($conn,$sql1);

      while($row1 = mysqli_fetch_assoc($res1)){?>
        <option value="<?php echo $row1['department_id'] ?>"><?php echo $row1['department_name'] ?></option>
      <?php
      }
      ?>
                </select>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div>

                <div class="form-group">
                <label for="pos_id" class="bmd-label-floating">เลือกตำแหน่ง:</label>
                <select class="custom-select" name="pos_id" required>
                <option value="">-----โปรดเลือก-----</option>
                <?php
      $sql2 = "SELECT * FROM position";
      $res2 = mysqli_query($conn,$sql2);

      while($row2 = mysqli_fetch_assoc($res2)){?>
        <option value="<?php echo $row2['p_id'] ?>"><?php echo $row2['p_name'] ?></option>
      <?php
      }
      ?>
                </select>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div>

                <div class="form-group">
                <label for="staus" class="bmd-label-floating">เลือกสถานะ:</label>
                <select class="custom-select" name="status" required>
                <option value="">-----โปรดเลือกสถานะ-----</option>
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