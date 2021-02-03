<?php
include('connect.php');
include('css.php');
include('menu_admin.php');
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
                        <th>User_id </th>
                        <th>Username </th>
                        <th>Password </th>
                        <th>Department </th>
                        <th>Position</th>
                        <th>Position</th>
                        <th>Position</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row=$res->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['']; ?></td>
                        <td><?php echo $row['']; ?></td>
                        <td><?php echo $row['']; ?></td>
                        <td><?php echo $row['']; ?></td>
                        <td><?php echo $row['']; ?></td>
                        <td><?php echo $row['']; ?></td>
                        <td><?php echo $row['']; ?></td>
                      
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