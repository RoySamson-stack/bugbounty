<?php

?>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="css/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="css/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Main Sidebar -->
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 70px;" src="img/bug.jfif" >
                  <span class="d-none d-md-inline ml-1">BUGBOUNTY</span>
                    <span><?php echo $user['fname'];?></span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="home.php">
                  <i class="material-icons">house</i>
                  <span>Dashboard</span> 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="program.php">
                  <i class="material-icons">vertical_split</i>
                  <span>Programs</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="report.php">
                  <i class="material-icons">report</i>
                  <span>Report</span>
                </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link " href="login.php" onClick="return confirm('Are you sure you wanna logout?');">
                     <i class="material-icons">logout</i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
		</aside>
