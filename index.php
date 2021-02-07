<?php
include('connect.php');
include('css.php');
include('chkmenu.php');

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
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">perm_contact_calendar</i>
                  </div>
                  <p class="card-category">Number of members</p>
                  <h3 class="card-title"> <?php echo $row['total1']; ?>
                    <small>people</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">published_with_changes</i>
                    <a href="javascript:;">Daily update </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">directions_bus</i>
                  </div>
                  <p class="card-category">Car number</p>
                  <h3 class="card-title"><?php echo $row1['total2']; ?>
                  <small>car</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">departure_board</i> Of Chonburi Technical College
                  </div>
                </div>
              </div>
            </div>
            
 
  <script>


  </script>   
