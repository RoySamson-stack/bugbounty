<?php


  ?>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css"/>
    <title>COMPANY SIGNUP</title>
</head>
<body>


<div class="container">
   <form action="upload.php" method="POST" encttype="multipart/form-data">
    <div class="card card-container">
        <p id="profile-name" class="profile-name-card">signup</p>
        <br>
    </form>
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
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
           

                <div class="form-group col-lg-12">
                    <label></label>
                    <input type="text"  name="comp_name" id="comp_name" class="form-control" placeholder="Enter Company Name" required
                           data-error="Enter ">
                    <div class="help-block with-errors"></div>
                </div>
            <div class="form-group col-lg-12">
                <input type="text" name="contact_no" id="contact_no" class="form-control" placeholder="Contact number"
                           data-error="Enter Contact Number">
                    <div class="help-block with-errors"></div>
            </div>
                 <div class="form-group col-lg-12">
                    <label></label>
                    <input type="text" name="email" id ="email" class="form-control" placeholder="Email" required
                           data-error="Enter Email">
                    <div class="help-block with-errors"></div>
                
                    </div>
                <div class="form-group col-lg-12">
                    <label></label>
                    <input type="password" name="pass" id ="pass" class="form-control" placeholder="Password" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label></label>
                    <input type="password" name="pass2" class="form-control" placeholder="repeat password" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
            <div class="form-group col-lg-12">
                    <label></label>
                    <input type="numbers" name="bounty_average" id="bounty_average" class="form-control" placeholder="Average Amount" required
                           data-error="Enter Average Amount">
                    <div class="help-block with-errors"></div>
                </div>
            <div class="form-group col-lg-12">
                    <label></label>
                    <input type="number" name="bounty_minimum" class="form-control" placeholder="Minimum Amount" required
                           data-error="Enter Min Amount">
                    <div class="help-block with-errors"></div>
                </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="join">Signup</button>
            <a href="login.php" class="forgot-password">
            Login to account
        </a>
        </form>
    </div>
</div>
    </div><!-- /card-container -->
</div><!-- /container -->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
</body>
</html>
