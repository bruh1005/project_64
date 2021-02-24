<?php
include('connect.php');
include('css.php');
include('chkmenu.php');
include('script.php');
 
$sql="SELECT * FROM drivers ";
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
                <h4 class="card-title ">TABLE Drivers</h4>
            </div>
           
            <div class="card-body ">
                <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" >
                <thead class=" text-primary">
                    <tr>
                        <th>หมายเลขคนขับรถ </th>
                        <th>ชื่อ </th>
                        <th>นามสกุล </th>
                        <th>เบอร์โทรศัพท์ </th>
                        <th>หมายเลขใบขับขี่</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row=$res->fetch_assoc()) {
                   
                    ?>
                    <tr>
                        <td><?php echo $row['driver_id']; ?></td>
                        <td><?php echo $row['d_fname']; ?></td>
                        <td><?php echo $row['d_lname']; ?></td>
                        <td><?php echo $row['d_phone']; ?></td>
                        <td><?php echo $row['driver_no']; ?></td>
                        <td><a href="edit_driver_f.php?driver_id=<?php echo $row['driver_id']; ?>">
                            <button class="btn btn-info" type="submit">
                            <i class="material-icons">mode</i>
                            แก้ไข</button></a>
                        </td>
                        <td><a href="delete_driver.php?driver_id=<?php echo $row['driver_id']; ?>">
                            <button class="btn btn-danger" type="submit">
                            <i class="material-icons">delete_forever</i>
                            ลบ</button></a>
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