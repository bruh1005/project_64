<?php
include('connect.php');
include('css.php');
include('chkmenu.php');
include('script.php');

 
$sql="SELECT * FROM user ";
$res=$conn->query($sql);
?>

    <div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">TABLE Profile</h4>
            </div>
           
            <div class="container card-body">
                <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" >
                <thead class=" text-primary">
                    <tr>
<<<<<<< HEAD
                        <th>รหัสผู้ใช้งาน </th>
                        <th>ชื่อผู้ใช้งาน </th>
=======
                        <th>หมายเลขผู้ใช้ </th>
                        <th>ชื่อผู้ใช้ </th>
>>>>>>> a8dffce6ec8eee3a37d6a211d5d13db9b7226832
                        <th>รหัสผ่าน </th>
                        <th>แผนก </th>
                        <th>ตำแหน่ง</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
<<<<<<< HEAD
                        <th>เบอรืโทรศัพท์</th>
                        <th>สถาานะการใช้งาน</th>
                        <th>สถาานะการเปลี่ยนรหัส</th>
=======
                        <th>เบอร์โทรศัพท์</th>
                        <th>สถานะ</th>
>>>>>>> a8dffce6ec8eee3a37d6a211d5d13db9b7226832
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row=$res->fetch_assoc()) {
                    $department_id=$row['department_id'];
                    $sql2="select * from department where department_id=$department_id";
                    $res2=$conn->query($sql2);
                    $row2=$res2->fetch_assoc();
                    
                    $p_id=$row['p_id'];
                    $sql3="select * from position where p_id=$p_id";
                    $res3=$conn->query($sql3);
                    $row3=$res3->fetch_assoc();
                    ?>
                    <tr>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row2['department_name']; ?></td>
                        <td><?php echo $row3['p_name']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['statuspass']; ?></td>
                        <td><a href="edit_userp_f.php?user_id=<?php echo $row['user_id']; ?>">
                            <button class="btn btn-warning" type="submit">
                            <i class="material-icons">vpn_key</i>
                            </button></a>
                        </td>
                        <td><a href="delete_user.php?user_id=<?php echo $row['user_id']; ?>">
                            <button class="btn btn-danger" type="submit">
                            <i class="material-icons">delete_forever</i>
                            </button></a>
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