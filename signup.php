<?php


  ?>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css"/>
    <title>SIGNUP</title>
</head>
<body>
<div class="container">
    <div class="card card-container">
        
        <p id="profile-name" class="profile-name-card">signup</p>
  
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Enter name</div>';
			}else if(isset($_GET['empty'])){
				echo '<div class="alert alert-danger">Enter username</div>';
			}
			elseif (isset($_GET['signup'])){
                echo '<div class="alert alert-danger">Username or Password Don\'t Match</div>';
            } ?>
        </div>
       
       <!-- The beginning of the signup form-->
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">

                <div class="form-group col-lg-12">
                    <label></label>
                    <input type="text"  name="fname" class="form-control" placeholder="Enter Name" required
                           data-error="Enter Name">
                    <div class="help-block with-errors"></div>
                </div>
                
               <div class="form-group col-lg-12">
                <input type="text" name="username" id="username" class="form-control" placeholder="username"
                           data-error="Enter username">
                    <div class="help-block with-errors"></div>
                </div>
                
               <div class="form-group col-lg-12">
                <input type="text" name="email" class="form-control" placeholder="email" required
                           data-error="Enter email">
                    <div class="help-block with-errors"></div>
                </div>
                
                <div class="form-group col-lg-12">
                    <label></label>
                    <input type="password" name="pass1" class="form-control" placeholder="Password" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
                
                <div class="form-group col-lg-12">
                    <label></label>
                    <input type="password" name="pass2" class="form-control" placeholder="repeat password" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="signup">Signup</button>
            <a href="login.php" class="forgot-password">
            Login to account
        </a>
            </div>
               </form>   
    </div>
       </form>            
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
</body>
</html>
