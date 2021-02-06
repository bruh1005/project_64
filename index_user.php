<?php
include('connect.php');
include('css.php');
include('chkmenu.php');
include('script.php');

$sql = "SELECT COUNT('user_id') as total1 FROM user ";
$res = $conn->query($sql);
$row = $res->fetch_assoc();

$sql1 = "SELECT COUNT('car_id') as total2 FROM cars ";
$res1 = $conn->query($sql1);
$row1 = $res1->fetch_assoc();
?>
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                
                </div>
            </div>
        </div>
            
 
  <script>


  </script>   
