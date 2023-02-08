<?php
session_start();
include('./include/connection.php');

if(isset($_POST['login'])){

    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();

    if(empty($username)){
        $error['admin'] = "Enter Username";
    }else if(empty($password)){
        $error['admin'] = "Enter Password";
    }

    if(count($error)==0){

        $query = "SELECT * FROM admin where username='$username' AND password='$password'";

        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            echo "<script>alert('You have login as admin')</script>";
            $_SESSION['admin'] = $username;

            header("Location:admin/dashboard.php");
            exit();
        }else{
            echo "<script>alert('Invalid  Username or Password')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
    </head>
    <body style="background-image: url(img/staff2.jpg); background-size: cover;">
        <?php include('./include/mainheader.php')?>

        <div style="margin-top:60px;" ></div>

        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" style="background-color:gainsboro; padding: 25px; border-radius: 10px;">
                    
                    <img src="img/admin.png" class="col-md-12" style="width: 70%; height:200px;" alt="admin">
                        <form action="" method="post" class="my-2">
                            <div >
                                <?php
                                if(isset($error['admin'])){
                                    $sh = $error['admin'];
                                    $show = "<h5 class='alert alert-danger'>$sh</h5>";
                                }else{
                                    $show = "";
                                }
                                echo $show;
                                ?>
                            </div>
                            <div class="form-group" style="margin-top: 10px;">
                                <label>Username</label>
                                <input type="text" name="uname" class="form-control"
                                autocomplete="off" placeholder="Enter Username">
                            </div>
                            <div class="form-group" style="margin-top: 10px;">
                                <label>Password</label>
                                <input type="password" name="pass" placeholder="Enter Password" class="form-control" >
                            </div>
                            <input type="submit" name="login"  class="btn btn-primary btn-user btn-block" style="margin-top: 10px;" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>