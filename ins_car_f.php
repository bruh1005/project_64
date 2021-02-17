<?php
include('connect.php');
include('css.php');
include('menu_admin.php');
include('script.php');

$sql ="SELECT * FROM province ";
$res = $conn->query($sql);

?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title ">เพิ่มข้อมูลรถ</h4>
            </div>
           
            <div class="container card-body">
                
                <form class="was-validated" action="ins_car_sql.php" method= "post" >
                <div class="form-group">
                <label for="car_id" class="bmd-label-floating">หมายเลขทะเบียนรถ :</label><br>
                <input type="text" class="form-control" id="car_id" name="car_id" required>
                </div>

                <div class="form-group">
                <label for="type" class="bmd-label-floating">ประเภทยานพาหนะ :</label>
                <select class="custom-select" name="type" required>
                <option value="">-----โปรดเลือก-----</option>
                <option value ="รถตู้">รถตู้</option>
                <option value ="รถกะบะ">รถกะบะ</option>
                <option value ="รถ6ล้อ">รถ6ล้อ</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกประเภทยานพาหนะ !!!!</div>
                </div>

                <div class="form-group">
                <label for="province" class="bmd-label-floating">จังหวัด :</label>
                <select class="custom-select js-example-basic-single" name="province" required>
                <option value="">-----โปรดเลือก-----</option>
                    <?php while($row=$res->fetch_assoc()){ ?>
                    <option value ="<?php echo $row['province_id'] ?>"><?php echo $row['province_name'] ?></option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">กรุณาเลือกประเภทยานพาหนะ !!!!</div>
                </div>

                <div class="form-group">
                <label for="brand" class="bmd-label-floating">ยี่ห้อยานพาหนะ :</label>
                <input type="text" class="form-control" name="brand" required>
                </div><br>
                
                <div class="form-group">
                <label for="capacity" class="bmd-label-floating">จำนวนที่นั่ง :</label>
                <input type="text" class="form-control" name="capacity" required>
                </div><br>

                <div class="form-group">
                <label for="carstatus" class="bmd-label-floating">สถานะการใช้งาน :</label>
                <select class="custom-select" name="carstatus" required>
                <option value="">-----โปรดเลือก-----</option>
                <option value ="ใช้งานปกติ">ใช้งานปกติ</option>
                <option value ="ซ่อมบำรุง">ซ่อมบำรุง</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกสถานะการใช้งาน !!!!</div>
                </div>

                <input class="btn btn-success btn-round" type="submit" value="เพิ่มยานพาหนะ">
                </form>


                </div>
            </div>
            </div>
        </div>
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
    });
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