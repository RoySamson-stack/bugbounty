<?php
require 'ajax.php'
?>

<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css"/>
    <title>LOGIN</title>
</head>
<body>


<div class="container">
    <div class="card card-container">
       
        <p id="profile-name" class="profile-name-card">Login</p>
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Enter Username or Password</div>';
            }elseif (isset($_GET['login'])){
                echo '<div class="alert alert-danger">Username or Password Don\'t Match</div>';
            } ?>
        </div>
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label for="uname"></label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username/Email Address" required
                           data-error="Enter Username or Email">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Password"></label>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login" >Login</button>

        </form><!-- /form -->
        <a href="forgot.php" class="forgot-password">
            Forgot the password?
        </a>
        <p>
        <a href="signup.php" class="#">
          Signup
        </a>
      </p>
    </div><!-- /card-container -->
</div><!-- /container -->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
</body>
</html>
