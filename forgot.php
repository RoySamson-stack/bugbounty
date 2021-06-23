<php
     require 'ajax.php';
     
     	if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "root", "", "mis");
		
		$condition = "";
		if(!empty($_POST["username"])) 
			$condition = " username = '" . $_POST["username"] . "'";
		if(!empty($_POST["email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " email = '" . $_POST["email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "SELECT * FROM user " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery.php");
		} else {
			$error_message = 'No User Found';
		}
	}
     ?>
<html>
    
    <link rel="stylesheet" href="css/forgot.css">
     <form name="forgot" id="forgot" method="post" onSubmit="return validate_forgot();">
         <title>PASSWORD RESET</title>
    <body>
        <script color: red>
function validate_forgot() {
       if ((document.getElementById("username").value == "") && (document.getElementById("email").value ==
                     "")) {
              document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
              return false;
       }
       return true
}
</script>
          <?php if(!empty($success_message)) { ?>
       <div class="success_message"><?php echo $success_message; ?></div>
       <?php } ?>

       <div id="validation-message" class="error">
              <?php if(!empty($error_message)) { ?>
              <?php echo $error_message; ?>
              <?php } ?>
       </div>
    <p><label>Username</label>
        <input type="text" id="username" name="username" placeholder="Enter username ">    
    </p>
        <p><label>Email</label>
        <input type="text" name="email" id="email" placeholder="Enter email"></p>
            <p><button type="submit" name="forgot-password" id="forgot-password">Send link</button></p>
    </body>
          </form>
    </html>
</php>