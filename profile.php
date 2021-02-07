<?php
session_start();
include('connect.php');
include('css.php');
include('menu_admin.php');


$user_id = $_SESSION['user_id'];
$sql="SELECT * FROM user WHERE user_id = $user_id";
$res = $conn->query($sql);
$row = $res->fetch_assoc();

    $department_id=$row['department_id'];
    $sql2="select * from department where department_id=$department_id";
    $res2=$conn->query($sql2);
    $row2=$res2->fetch_assoc();

    $p_id=$row['p_id'];
    $sql3="select * from position where p_id=$p_id";
    $res3=$conn->query($sql3);
    $row3=$res3->fetch_assoc();
?>

    <div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Profile</h4>
            </div>
                <div class="text-center card-body">
                    <img src="assets/img/unnamed.png" width="20%">
                    <p></p>
                    <table class="table table-borderless">
                        <tr>
                            <td align="right"><h4 class="card-title">Uesrname :</h4></td>
                            <td><h4><?php echo $row['username'] ?></h4></td>
                        </tr>
                        <tr>
                            <td align="right"><h4 class="card-title">Password : </h4></td>
                            <td><h4><?php echo $row['password'] ?></h4></td>
                        </tr>
                        <tr>
                            <td align="right"><h4 class="card-title">Fristname : </h4></td>
                            <td><h4><?php echo $row['fname'] ?></h4></td>
                        </tr>
                        <tr>
                            <td align="right"><h4 class="card-title">Lastname : </h4></td>
                            <td><h4><?php echo $row['lname'] ?></h4></td>
                        </tr>
                        <tr>
                            <td align="right"><h4 class="card-title">Department : </h4></td>
                            <td><h4><?php echo $row2['department_name'] ?></h4></td>
                        </tr>

                        <tr>
                            <td align="right"><h4 class="card-title">Position : </h4></td>
                            <td><h4><?php echo $row3['p_name'] ?></h4></td>
                        </tr>
                        <tr>
                            <td align="right"><h4 class="card-title">Telahphone : </h4></td>
                            <td><h4><?php echo $row['phone'] ?></h4></td>
                        </tr>
                    </table>
                    <a href="profile_edit_f.php?user_id=<?php echo $row['user_id'] ?>"> <button class="btn btn-warning" type="submit"> EDIT </button></a>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>