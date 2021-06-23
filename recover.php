<php
    
    if(isset($_POST["forgot-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "mis");
		$sql = "UPDATE `mis`.`user` SET pass` = '" . md5($_POST["pass"]). "' WHERE `user`.`username` = '" . $_GET["username"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.";
		
	}
    ?>
<link rel="stylesheet" href="css/forgot.css">
<script>
function validate_password_reset() {
       if ((document.getElementById("password").value == "") && (document.getElementById("Confirm Password")
                     .value == "")) {
              document.getElementById("validation-message").innerHTML = "Please enter new password!"
              return false;
       }
       return true
}
   
</script>
<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_password_reset();">

       <?php if(!empty($success_message)) { ?>
       <div class="success_message"><?php echo $success_message; ?></div>
       <?php } ?>

       <div id="validation-message">
              <?php if(!empty($error_message)) { ?>
              <?php echo $error_message; ?>
              <?php } ?>
       </div>
       <p><div class="field-group">
              <div><label for="Password">Password</label></div>
              <div><input type="password" name="password" id="password" class="input-field" placeholder="Password"></div>
       </div>
    </p>
      

       <div class="field-group">
              <div><label for="email">Confirm Password</label></div>
              <div><input type="password" name="confirm_password" id="confirm_password" class="input-field" placeholder="Confirm password"></div>
       </div>

       <div class="field-group">
           <p>
           <button type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button">Confirm</button>
           </p>
              
       </div>
    
</form>