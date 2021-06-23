<?php
include_once 'db.php';

if (isset($_POST['signup'])) {
    extract($_POST);
    $servername = "localhost ";
    $username   = "root";
    $password   = "";
    $dbname     = "mis";
    // Create connection
    $name=$_POST['fname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $conn = mysqli_connect("localhost","root","","mis");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO `user` (id,fname,username,email,pass,created_at)

VALUES ('$id','$name','$username','$email','$password','$created_at')";
    if ($conn->query($sql) === TRUE) {
        header('Location: login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo $password;
    $query = "select * from login where username = '$username' and password='$password'";
    $result = mysqli_query($connection, $query);

    $userdetails = mysqli_fetch_assoc($result);

    if($userdetails['username']=='manager')
    {
        header('Location: home.php');
    }
    else{

        header('Location: login.php');
    }


}

if (isset($_POST['submit'])) {

    $emp_id = $_POST['emp_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $staff_type_id = $_POST['staff_type_id'];
    $shift_id= $_POST['shift_id'];
    $id_card_type = $_POST['id_card_type'];
    $id_card_no = $_POST['id_card_no'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $joining_date = strtotime($_POST['joining_date']);

    $salary = $_POST['salary'];

    $query="UPDATE staff
SET emp_name='$first_name $last_name', staff_type_id='$staff_type_id', shift_id='$shift_id', id_card_type=$id_card_type,
id_card_no='$id_card_no',address='$address',contact_no='$contact_no',joining_date='$joining_date',salary='$salary'
WHERE emp_id=$emp_id ";
//echo $query;
    if (mysqli_query($connection, $query)) {
        header('Location: home.php?staff_mang');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }


}

if (isset($_GET['empid'])!="")
{
   $emp_id=$_GET['empid'];
    $deleteQuery = "DELETE FROM staff WHERE emp_id=$emp_id";
    if (mysqli_query($connection, $deleteQuery)) {
        header('Location: home.php?staff_mang');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

?>
