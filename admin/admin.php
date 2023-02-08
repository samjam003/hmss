<?php
session_start();
include('../include/connection.php')
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
        
        <?php
        include('./sidenav.php');
        include('../include/header.php');
        ?>
        <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Administrator</h1>
    <a href="addadmin.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus-circle fa-sm text-white-50"></i> Add admin</a>
</div>
<p class="mb-4"> <a target="_blank"
        ></a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Other Admin</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <?php
                                    $ad = $_SESSION['admin'];
                                    $query = "SELECT * FROM admin where username !='$ad'";
                                    $res = mysqli_query($connect, $query);
                    $output ="
                    <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>username</th>
                        <th>email</th>
                        <th>Action</th>

                    </tr>
                </thead>
                ";
                if(mysqli_num_rows($res) < 1){
                    $output .= "<tr><td colspan=5 class='text-center'>No new admin</tr></tr>";
                }
                while($row = mysqli_fetch_array($res)){
                    $id = $row['id'];
                    $username = $row['username'];
            $name = $row['name'];
            $email = $row['email'];
                    $output .="
                <tbody>
                    <tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$username</td>
                        <td>$email</td>
                        <td><a href='admin.php?id=$id'><button id='$id' class='btn btn-danger' remove>Remove</button></a>
                        </td>";
                    }
                        $output .="
                    </tr>
                </tbody>
            </table>";
            echo $output;
            
            if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];

                $query = "DELETE FROM admin WHERE id = '$id'";
                $result = mysqli_query($connect, $query); 
                if($result){
                    echo "<script>alert('Removed Successfully');
                    window.location.href='admin.php';</script>";

            } else {
                echo "<script>alert('Something Went Wrong!')";
                
            }
            }
            ?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
    </body>
</html>