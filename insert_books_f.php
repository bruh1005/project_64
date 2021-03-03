<?php
include('connect.php');
include('css.php');
include('menu_user.php');
include('script.php');
 

?>

<div class="content">
    <div class="container-fluid">

        <div class="row">
        
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title ">จองยานพาหนะ</h4>
            
            </div>
           
            <div class="container card-body">
                
                <form class="was-validated" action="user_books_sql.php" method= "post" >
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <label for="destination" class="bmd-label-floating">ปลายทาง:</label><br>
                <input type="text" class="form-control"  name="destination" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="capacity" class="bmd-label-floating">จำนวนผู้โดยสาร:</label><br>
                <input type="text" class="form-control" name="cap" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="purpose" class="bmd-label-floating">จุดประสงค์:</label>
                <input type="text" class="form-control" name="purp" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>
                </div>

                <div class="col-md-6">

                <div class="form-group">
                <label for="date_start" class="bmd-label-floating">วันที่ไป:</label>
                <input type="date" class="form-control" name="d_start" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="date_stop" class="bmd-label-floating">วันที่กลับ:</label>
                <input type="date" class="form-control" name="d_stop" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>

                <div class="form-group">
                <label for="car" class="bmd-label-floating">รถที่จะจอง:</label>
                <input type="text" class="form-control" name="car" required>
                <div class="invalid-feedback">กรุณากรอกข้อมูล !!!!</div>
                </div><br>
                </div>
                </div>

                

                <input class="btn btn-success btn-round" type="submit" value="ยืนยัน">
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