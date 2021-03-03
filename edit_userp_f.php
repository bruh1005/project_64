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
                <h4 class="card-title ">แก้ไขรหัสผ่านผู้ใช้งาน</h4>
            </div>
           
            <div class="container card-body">
                
                <form class="was-validated" action="edit_user_sql.php" method= "post" >
                <br>
                <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                <div class="form-group">
                <label for="usr" class="bmd-label-floating">ชื่อผู้ใช้งาน:</label><br>
                <input type="text" class="form-control" name="usr" value="<?php echo $row['username']; ?>"  style="width: 300px;"readonly >
                </div><br>

                <div class="form-group">
                <div class="form-inline">
                <label for="usr" class="bmd-label-floating">ชื่อผู้ใช้งาน:</label>
                <input type="text" class="form-control" id="password-field" name="usr" value="<?php echo $row['password']; ?>"  style="width: 200px;" >
                <span class="input-group-addon"><i style="width:200px" id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i></span>
                </div>
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
 
function viewPassword()
{
  var passwordInput = document.getElementById('password-field');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='fa fa-eye-slash';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='fa fa-eye';
  }
}
</script>