<?php
require 'ajax.php';
include_once 'admside.php'
?>
<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BUGBOUNTY</title>
    <meta name="description"
        content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="css/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="css/tables.css">
    <link rel="stylesheet" href="css/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body class="h-100">
    <div class="container-fluid">
        <div class="row">
           
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                
                <div class="main-content-container container-fluid px-4">
                    <!-- Page Header -->
                    <div class="page-header row no-gutters py-4">
                        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                            <span class="text-uppercase page-subtitle">Overview</span>
                            <h3 class="page-title">Programs</h3>
                        </div>
                    </div>
                    <!-- End Page Header -->
                    <!-- Default Light Table -->
                    <div class="row">
                        <div class="col">
                            <div class="card card-small mb-6">
                                <div class="card-header border-bottom">
                                    <h6 class="m-0">Active</h6>
                                </div>
                                <div class="card-body p-0 pb-3 text-center">
                                    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <?php
                    if (isset($_GET['error'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error on Shift Change !
                            </div>";
                    }
                    if (isset($_GET['success'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Shift Successfully Changed!
                            </div>";
                    }
                    ?>
                                         <table
                                              class="table table-striped table-bordered table-responsive"
                                            cellspacing="0" width="100%" id="rooms">
                                                            <thead>
                                                                <tr>
                                           <th>Sr. No</th>
                                            <th>Company</th>
                                         <th> Title</th>
                                        <th>Details</th>                 <th>Descriptions</th>
                                        <th>User</th>                            
                                       </tr>
                                                            </thead>     <tbody>
                                                                <?php
                        //$staff_query = "SELECT * FROM staff  JOIN staff_type JOIN shift ON staff.staff_type_id =staff_type.staff_type_id ON shift.";
                        $submissions_query = "SELECT * FROM submissions ";
                        $submissions_result = mysqli_query($connection,$submissions_query);

                        if (mysqli_num_rows($submissions_result) > 0) {
                            while ($submissions = mysqli_fetch_assoc($submissions_result)) { ?>
                                                                <tr>

                                          <td><?php echo $submissions['id']; ?></td>
                                         <td><?php echo $submissions['comp_name']; ?></td>
                                        <td><?php echo $submissions['title']; ?></td>
                                             <td><?php echo $submissions['details']; ?></td>
                                             <td>
                            <?php echo $submissions['descrpt']; ?>
                            </td>
                                                <td><?php echo $submissions['user']?></td>                    
                                                      </tr>
                                                         <?php
                            }
                        }
                        ?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            


