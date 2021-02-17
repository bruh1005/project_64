<?php
include('connect.php');
include('css.php');
include('menu_admin.php');
include('script.php');

$car_id = $_GET['car_id'];
$sql ="SELECT * FROM cars WHERE car_id like '".$car_id."'";
//echo $sql ;
$res = $conn->query($sql);
$row = $res->fetch_assoc();
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
                
                <form  action="ins_car_sql.php" method= "post" >
                <div class="form-group">
                <label for="car_id" >หมายเลขทะเบียนรถ :</label><br>
                <input type="text" class="form-control" id="car_id" name="car_id" value="<?php echo $row['car_id'] ?>" readonly>
                </div>

                <div class="form-group">
                <label for="type" >ประเภทยานพาหนะ :</label>
                <input type="hidden" id="chk" value="<?php echo $row['type'] ?>">
                <select class="browser-default custom-select" name="type" >
                <option id="รถตู้" value="รถตู้" >รถตู้</option>
                <option id="รถกะบะ" value="รถกะบะ" >รถกะบะ</option>
                <option id="รถ6ล้อ" value="รถ6ล้อ" >รถ6ล้อ</option>
                </select>
                </div>

                <div class="form-group">
                <label for="province" >จังหวัด :</label>
                <select class="browser-default custom-select" name="province" >
                    <?php 
                    $sqlp ="SELECT * FROM province ";
                    $resp = $conn->query($sqlp);
                    while($rowp=$resp->fetch_assoc()){ ?>
                    <option value ="<?php echo $rowp['province_id'] ?>"><?php echo $rowp['province_name'] ?></option>
                    <?php } ?>
                </select>
                </div><br>

                <div class="form-group">
                <label for="brand" >รุ่นยานพาหนะ :</label>
                <input type="text" class="form-control" name="brand" >
                </div><br>
                
                <div class="form-group">
                <label for="capacity" >จำนวนที่นั่ง :</label>
                <input type="text" class="form-control" name="capacity" >
                </div><br>

                <div class="form-group">
                <label for="carstatus" >สถานะการใช้งาน :</label>
                <select class="browser-default custom-select" name="carstatus" >
                <option value ="ใช้งานปกติ">ใช้งานปกติ</option>
                <option value ="ซ่อมบำรุง">ซ่อมบำรุง</option>
                </select>
                </div>

                <input class="btn btn-warning btn-round" type="submit" value="แก้ไขข้อมูล">
                </form>  <a href="tablecars.php"><input class="btn btn-danger btn-round" type="submit" value="ยกเลิก"></a>


                </div>
            </div>
            </div>
        </div>
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
    });

    $(document).ready(function(){
        document.getElementById($('#chk').val()).selected = "true";
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