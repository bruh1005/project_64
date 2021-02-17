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
                </div><br>

                <div class="form-group">
                <label for="pwd" class="bmd-label-floating">รหัสผ่าน:</label><br>
                <input type="password" class="form-control" name="pwd" required>
                </div><br>

                <div class="form-group">
                <label for="fname" class="bmd-label-floating">ชื่อ:</label>
                <input type="text" class="form-control" name="fname" required>
                </div><br>

                <div class="form-group">
                <label for="lname" class="bmd-label-floating">นามสกุล:</label>
                <input type="text" class="form-control" name="lname" required>
                </div><br>

                <div class="form-group">
                <label for="phone" class="bmd-label-floating">เบอร์โทรศัพท์:</label>
                <input type="text" class="form-control" name="phone" required>
                </div><br>

                <div class="form-group">
                <label for="dep_id" class="bmd-label-floating">เลือกแผนก:</label>
                <select class="custom-select" name="dep_id" required>
                <option value="">-----โปรดเลือก-----</option>
                            <option value="1">แผนกช่างกลโรงงาน</option>
                            <option value="2">แผนกช่างยนต์</option>
							<option value="3">แผนกไฟฟ้ากำลัง</option>
							<option value="4">แผนกช่างอิเล็กทรอนิกส์</option>
							<option value="5">แผนกช่างเทคนิคคอมพิวเตอร์</option>
							<option value="14">แผนกแผนกช่างเมคคาทรอนิกส์</option>
							<option value="6">แผนกช่างก่อสร้าง</option>
							<option value="7">แผนกช่างเชื่อมโลหะ</option>
							<option value="8">แผนกช่างสถาปัตยกรรม</option>
							<option value="9">แผนกโลจิสติกส์</option>
							<option value="10">แผนกควบคุมและขนส่งระบบทางราง</option>
							<option value="11">แผนกช่างเทคนิคอุตสาหกรรม</option>
							<option value="12">แผนกช่างเขียนแบบเครื่องกล</option>
							<option value="13">แผนกเทคโนโลยีสารสนเทศ</option>
                </select>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div>

                <div class="form-group">
                <label for="pos_id" class="bmd-label-floating">เลือกตำแหน่ง:</label>
                <select class="custom-select" name="pos_id" required>
                <option value="">-----โปรดเลือก-----</option>
                <option value ="1">ผู้อำนวยการ</option>
                <option value ="2">รองผู้อำนวยการ</option>
                <option value ="3">อาจารย์</option>
                <option value ="4">เจ้าหน้าที่</option>
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