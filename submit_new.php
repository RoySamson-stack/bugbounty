<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $query ="UPDATE user SET password='$pass' WHERE email='$email'";
  mysqli_connect('localhost','root','', 'mis');
  $select=mysqli_query($connection, $query);
}
?>
