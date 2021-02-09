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
            <div class="card-header card-header-primary">
                <h4 class="card-title ">เพิ่มข้อมูลผู้ใช้งาน</h4>
            </div>
           
            <div class="container card-body">
                
                <form action="insert_user_sql.php" method=post >
                <br>

                <div class="form-group">
                <label for="usr_id">ID ผู้ใช้งาน:</label><br>
                <input type="text" class="form-control" placeholder="ใส่ ID ผู้ใช้งาน" id="usr_id">
                </div><br>

                <div class="form-group">
                <label for="usr">ชื่อผู้ใช้งาน:</label><br>
                <input type="text" class="form-control" placeholder="ใส่ชื่อผู้ใช้งาน" id="usr">
                </div><br>

                <div class="form-group">
                <label for="pwd">รหัสผ่าน:</label><br>
                <input type="password" class="form-control" placeholder="ใส่รหัสผ่าน" id="pwd">
                </div><br>

                <div class="form-group">
                <label for="fname">ชื่อ:</label>
                <input type="text" class="form-control" placeholder="ใส่ชื่อ" id="fname">
                </div><br>

                <div class="form-group">
                <label for="fname">นามสกุล:</label>
                <input type="text" class="form-control" placeholder="ใส่นามสกุล" id="lname">
                </div><br>

                <div class="form-group">
                <label for="dep_id">เลือกแผนก:</label>
                <select class="form-control" id="dep_id">
                <option required>-----โปรดเลือก-----</option>
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
                </div>

                <div class="form-group">
                <label for="pos_id">เลือกตำแหน่ง:</label>
                <select class="form-control" id="pos_id">
                <option >-----โปรดเลือก-----</option>
                <option value ="1">ผู้อำนวยการ</option>
                <option value ="2">รองผู้อำนวยการ</option>
                <option value ="3">อาจารย์</option>
                <option value ="4">เจ้าหน้าที่</option>
                </select>
                </div><br>

                <div class="form-group">
                <label for="phone">เบอร์โทรศัพท์:</label>
                <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" id="phone">
                </div><br>

                <div class="form-group">
                <label for="staus">เลือกสถานะ:</label>
                <select class="form-control" id="status">
                <option value='admin'>admin</option>
                <option value='user'>user</option>
                </select>
                </div><br>

                


                <button type="submit" class="btn btn-primary">Submit</button>
                </form>


                </div>
            </div>
            </div>
        </div>

        