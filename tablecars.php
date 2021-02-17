<?php
include('connect.php');
include('css.php');
include('chkmenu.php');
include('script.php');
 
$sql="SELECT * FROM cars ";
$res=$conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    <div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">TABLE Profile</h4>
            </div>
           
            <div class="card-body ">
                <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" >
                <thead class=" text-primary">
                    <tr>
                        <th>ทะเบียนรถ </th>
                        <th>จังหวัด </th>
                        <th>ประเภทยานพาหนะ </th>
                        <th>ยี่ห้อยานพาหนะ </th>
                        <th>จำนวนที่นั่ง</th>
                        <th>สถานะการใช้งาน</th>
                        <th>Edit</th>
                        <th>Delect</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row=$res->fetch_assoc()) {
                    $province=$row['province'];
                    $sqlp="select * from province where province_id=$province";
                    $resp=$conn->query($sqlp);
                    $rowp=$resp->fetch_assoc();
                    ?>
                    <tr>
                        <td><?php echo $row['car_id']; ?></td>
                        <td><?php echo $rowp['province_name']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['brand']; ?></td>
                        <td><?php echo $row['capacity']; ?></td>
                        <td><?php echo $row['carstatus']; ?></td>
                        <td><a href="edit_car_f.php?car_id=<?php echo $row['car_id']; ?>">
                            <button class="btn btn-info" type="submit">
                            <i class="material-icons">mode</i>
                            EDIT</button></a>
                        </td>
                        <td><a href="delect_car.php?car_id=<?php echo $row['car_id']; ?>">
                            <button class="btn btn-danger" type="submit">
                            <i class="material-icons">delete_forever</i>
                            DELECT</button></a>
                        </td>
                      
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>