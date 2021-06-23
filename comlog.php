<?php
require 'ajax.php'
?>

<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body>


<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"/>
        <p id="profile-name" class="profile-name-card">Login</p>
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Enter Admin credentials</div>';
            }elseif (isset($_GET['enter'])){
                echo '<div class="alert alert-danger">The credentilas do not match</div>';
            } ?>
        </div>
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label for="uname">Admin</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Admin name/ email" required
                           data-error="Enter Username or Email">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Password"> Password</label>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="enter" >Login</button>

        </form><!-- /form -->
        <a href="comforgot.php" class="forgot-password">
            Forgot the password?
        </a>
        <p>
        <a href="comsign.php" class="#">
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
