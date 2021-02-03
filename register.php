<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/icons/icons8.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Car Reservation System
  </title>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-20 p-b-20">
				<form class="login100-form validate-form" action="register_sql.php" method="post">
					<span class="login100-form-title p-b-70">
						Register
					</span>

					<div class="wrap-input100 validate-input m-b-30" >
						<input class="input100" type="text" name="username" placeholder="Username" >
					</div>
					<div class="wrap-input100 validate-input m-b-50" >
						<input class="input100" type="password" name="password" placeholder="Password" >
                    </div>
                    
                    <div class="wrap-input100 validate-input row g-3 m-b-30">
                        <div class="col">
                            <input type="text" class="input100" placeholder="First name" name="fname">
                        </div>
                        <div class="col">
                            <input type="text" class="input100" placeholder="Last name" name="lname">
                        </div>
                    </div>
                    <div class="wrap-input100 validate-input m-b-30" >
                        <input class="input100" type="text" name="telephone" placeholder="Telephone" >    
                    </div>
                    <div class="wrap-input100 validate-input m-b-30" >
						<label for="psn" class="mr-sm-2">Position :</label>
                        <select class="input100" aria-label="Default select example" name="psn" id="psn"> 
                            <option required>-----Please select-----</option>
                            <option value="1">Director</option>
							<option value="2">Deputy director</option>
							<option value="3">Teacher</option>
							<option value="4">Official</option>
							
                        </select>    
                    </div>
					<div class="wrap-input100 validate-input m-b-30" >
						<label for="department" class="mr-sm-2">Department :</label>
                        <select class="input100" aria-label="Default select example" name="department" id="department">
                            <option required>-----Please select-----</option>
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

					<div class="container-login100-form-btn p-t-30">
					<input class="btn btn-success" type="button" value="REGISTER">
						<a href="login.php"><input class="btn btn-danger btn-round" type="button" value="CANCEL">
						</a>
					</div>
					</ul>
				</form>
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>