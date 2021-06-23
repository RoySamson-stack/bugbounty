<?php require 'ajax.php';
include_once 'admside.php';
?>

<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BUGBOUNTY</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="css/shards-dashboards.1.1.0.min.css">
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
                <h3 class="page-title">Company</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
           
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Add company</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
   
                          <form action="ajax.php" method="POST">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Company name </label>
                                <input type="text" class="form-control" name="com_name" id="feFirstName" placeholder="Company Name" > </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" name="email" id="feEmailAddress" placeholder="Email"> </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Bounty minimum</label>
                                <input type="aplhanumeric" class="form-control"name="bounty_min" id="fePassword" placeholder="bounty minimum"> </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fePassword">Bounty maximum</label>
                                <input type="aplhanumeric" class="form-control"name="bounty_max" id="fePassword" placeholder="bounty maximum"> </div>
                            </div>
                            <button type="submit" class="btn btn-accent" name="add_com">Add Company</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Edit company</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
   
                          <form action="ajax.php" method="POST">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Company name </label>
                                <input type="text" class="form-control" name="com_name" id="feFirstName" placeholder="Company Name" > </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" name="email" id="feEmailAddress" placeholder="Email"> </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Bounty minimum</label>
                                <input type="aplhanumeric" class="form-control"name="bounty_min" id="fePassword" placeholder="bounty minimum"> </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fePassword">Bounty maximum</label>
                                <input type="aplhanumeric" class="form-control"name="bounty_max" id="fePassword" placeholder="bounty maximum"> </div>
                            </div>
                            <button type="submit" class="btn btn-accent" name="edit_com">Edit company</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

			
          </div>
        
        </main>
      </div>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="js/extras.1.1.0.min.js"></script>
    <script src="js/shards-dashboards.1.1.0.min.js"></script>
  </body>
</html>
