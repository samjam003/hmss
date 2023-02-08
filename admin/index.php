<?php

include('../include/connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>HMS</title>

    <!-- Custom fonts for this template-->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       

        <?php
        include('./sidenav.php');
        include('../include/header.php'); ?>
        <!-- End of Topbar -->
        <div class="container-fluid">

           <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="./profile.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-user fa-sm text-white-50"></i> View Profile</a>
</div>
<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Admin</div>
                        <?php 
                                        $ad = mysqli_query($connect,"SELECT * FROM admin");

                                        $num =mysqli_num_rows($ad);
                                        ?>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Doctor</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total patient</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    
</body>

</html>