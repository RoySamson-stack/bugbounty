<?php
require  'ajax.php';
require 'sidebar.php'

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
                     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
                     crossorigin="anonymous">
              <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0"
                     href="css/shards-dashboards.1.1.0.min.css">
              <link rel="stylesheet" href="css/extras.1.1.0.min.css">
              <script async defer src="https://buttons.github.io/buttons.js"></script>
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
              <link rel="stylesheet" href="css/text.css">
       </head>
       <form action="ajax.php" method="POST" encttype="multipart/form-data">
        <body class="h-100">
              <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                     <div class="main-navbar sticky-top bg-white">
                            <div class="main-content-container container-fluid px-4">
                                   <!-- Page Header -->
                                   <div class="page-header row no-gutters py-4">
                                          <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                                                 <span class="text-uppercase page-subtitle">BUGBOUNTY</span>
                                                 <h3 class="page-title">Report</h3>
                                          </div>
                                   </div>
                                   <!-- End Page Header -->

                                   <div class="row">
                                          <div class="col-lg-9 col-md-12">
                                                 <!-- Inbox Form -->
                                                 <div class="card card-small mb-3">
                                                        <div class="card-body">
                                                        <form class="add-new-post">
                                                          </p>
                                                           <div>
                                                                    <h6>Company name</h6>
                                                                             <small class="text-muted">
                                                                                    For example:
                                                                                   Safaricom </small>
                                                                             <input placeholder="Company name"
                                                                                    class="bc-text-input bc-text-input--block"
                                                                                    minlength="3" maxlength="300"
                                                                                    autocomplete="off" size="300"
                                                                                    id="comp_name" type="text"
                                                                                    name="comp_name" required>
                                                                      </div>
                                                                       <div>
                                                                    <h6>Problem description</h6>
                                                                             <small class="text-muted">
                                                                                    In summary</small>
                                                                             <input placeholder="Problem description "
                                                                                    class="bc-text-input bc-text-input--block"
                                                                                    minlength="3" maxlength="300"
                                                                                    autocomplete="off" size="300"
                                                                                    id="title" type="text"
                                                                                    name="title">
                                                                      </div>
                                                                      <div>
                                                                    <h6>Vulnerability details(optional)</h6>
                                                                             <small class="text-muted">
                                                                                    For example:
                                                                                    https://secure.server.com/some/path/file.php</small>
                                                                             <input placeholder="Vulnerability details  "
                                                                                    class="bc-text-input bc-text-input--block"
                                                                                    minlength="3" maxlength="300"
                                                                                    autocomplete="off" size="300"
                                                                                    id="details" type="text"
                                                                                    name="details">
                                                                      </div>
                                                                      <h6>Give us a description of the vulnerability
                                                                             with all the required details </h6>
                                                                      <textarea
                                                                             class="bc-text-input bc-text-input--textarea"
                                                                             id="descrpt" name="descrpt"
                                                                             rows="16" maxlength="10000" placeholder=""
                                                                             aria-describedby="hint-description-textarea"
                                                                             aria-expanded="true"></textarea>
                                                                      <span>Add attachments(optional)</span>
                                                                       <div>
                                                                    <h6>Tester name</h6>
                                                                             <input placeholder="Tester name"
                                                                                    class="bc-text-input bc-text-input--block"
                                                                                    minlength="3" maxlength="300"
                                                                                    autocomplete="off" size="300"
                                                                                    id="user" type="text"
                                                                                    name="user">
                                                                      </div>
                                                                      <p><input type="file" class="btn btn-accent"
                                                                                    id="upload"></p>
                                                                      <button class="btn btn-accent" type="submit"
                                                                             id="report" name="report" >REPORT</button>
                                                               </form>
                                                        </div>
                                                 </div>
                                                 <!-- / Inbox Form -->
                                          </div>
                                          <div class="col-lg-3 col-md-12">

                                          </div>
                                          <!-- / Post Overview -->
                                          <!-- Post Overview -->


              </main>
              </div>
              </div>

              <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                     integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                     integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                     crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                     integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                     crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
              <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
              <script src="js/extras.1.1.0.min.js"></script>
              <script src="js/shards-dashboards.1.1.0.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
              <script src="js/app/app-blog-new-post.1.1.0.js"></script>
              </body>

</html>