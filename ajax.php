<?php
include_once 'db.php';
session_start();
//login server side
if (isset($_POST['login'])) {
	extract($_POST_DATA);
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!$username && !$email && !$pass) {
        header('Location:login.php?empty');
    } else {
        $pass = md5($pass);
        $query = "SELECT * FROM user WHERE  username = '$username' OR email='$email' AND pass='$pass'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $email['username'];
			$_SESSION['pass'] = $user['pass'];
            header('Location:home.php');
        } else {
            header('Location:login.php?loginE');
        }
    }

}

//signup server side
if (isset($_POST['signup'])) {  
    extract($_POST);  
    // Create connection  
    $conn = mysqli_connect("localhost","root","","mis");  
    // post the information in the database
    if(isset($_POST['create'])){
     
        $fname = $_POST['fname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass1 = $_POST['pass1'];

       
        $sql = "INSERT INTO user (fname, username, email, pass1) VALUES(?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$fname, $username, $email, $pass1]);
        if($result){
            echo "Successfully saved";
        }else{
            echo "Signup failed";
        }
        
       }
   
    $sql = "INSERT INTO `user` (fname,username,email,pass)  
  
VALUES ('$fname','$username','$email','$pass1')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: login.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
} 

//forgot pasword 
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

		$sql = "Select * from user " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery.php");
		} else {
			$error_message = 'No User Found';
		}
	}

//add company 
if (isset($_POST['add_com'])) {  
    extract($_POST);  
    // Create connection  
    $conn = mysqli_connect("localhost","root","","mis");  
    // post the information in the database
    if(isset($_POST['create'])){
     
        $com_name = $_POST['com_name'];
        $email = $_POST['email'];
        $bounty_min = $_POST['bounty_min'];
        $bounty_max = $_POST['bounty_max'];

       
        $sql = "INSERT INTO room (com_name, email, bounty_min, bounty_max) VALUES(?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$com_name, $email, $bounty_min, $bounty_max]);
        if($result){
            echo "Compny added";
        }else{
            echo "Company adding failed";
        }
        
       }
   
    $sql = "INSERT INTO `room` (com_name,email,bounty_min,bounty_max)  
  
VALUES ('$com_name','$email','$bounty_min','$bounty_max')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: admmng.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
} 
//
if (isset($_POST['room'])) {
    $room_id = $_POST['room_id'];

    $sql = "SELECT * FROM room WHERE room_id = '$room_id'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        $room = mysqli_fetch_assoc($result);
        $response['done'] = true;
        $response['room_no'] = $room['room_no'];
        $response['room_type_id'] = $room['room_type_id'];
    } else {
        $response['done'] = false;
        $response['data'] = "DataBase Error";
    }

    echo json_encode($response);
}
//edit companies
if (isset($_POST['edit_room'])) {
    $com_name = $_POST['com_name'];
    $email = $_POST['email'];
    $bounty_min = $_POST['bounty_min'];
    $bounty_max = $_POST['bounty_max'];

    if ($com_name != '') {
        $query = "UPDATE room SET com_name = '$$com_name',email = '$email' where id = '$id'";
        $result = mysqli_query($connection, $query);

        if ($result) {
            $response['done'] = true;
            $response['data'] = 'Successfully Edit Company';
        } else {
            $response['done'] = false;
            $response['data'] = "DataBase Error";
        }

    } else {

        $response['done'] = false;
        $response['data'] = "Please Enter company name";
    }

    echo json_encode($response);
}



if (isset($_POST['room_type'])) {
    $room_type_id = $_POST['room_type_id'];

    $sql = "SELECT * FROM room WHERE room_type_id = '$room_type_id' AND status IS NULL AND deleteStatus = '0'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "<option selected disabled>Select room Type</option>";
        while ($room = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $room['room_id'] . "'>" . $room['room_no'] . "</option>";
        }
    } else {
        echo "<option>No Available</option>";
    }
}


if (isset($_POST['booking'])) {
    $room_id = $_POST['room_id'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $total_price = $_POST['total_price'];
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $id_card_id = $_POST['id_card_id'];
    $id_card_no = $_POST['id_card_no'];
    $address = $_POST['address'];

    $customer_sql = "INSERT INTO customer (customer_name,contact_no,email,id_card_type_id,id_card_no,address) VALUES ('$name','$contact_no','$email','$id_card_id','$id_card_no','$address')";
    $customer_result = mysqli_query($connection, $customer_sql);

    if ($customer_result) {
        $customer_id = mysqli_insert_id($connection);
        $booking_sql = "INSERT INTO booking (customer_id,room_id,check_in,check_out,total_price,remaining_price) VALUES ('$customer_id','$room_id','$check_in','$check_out','$total_price','$total_price')";
        $booking_result = mysqli_query($connection, $booking_sql);
        if ($booking_result) {
            $room_stats_sql = "UPDATE room SET status = '1' WHERE room_id = '$room_id'";
            if (mysqli_query($connection, $room_stats_sql)) {
                $response['done'] = true;
                $response['data'] = 'Successfully Booking';
            } else {
                $response['done'] = false;
                $response['data'] = "DataBase Error in status change";
            }
        } else {
            $response['done'] = false;
            $response['data'] = "DataBase Error booking";
        }
    } else {
        $response['done'] = false;
        $response['data'] = "DataBase Error add customer";
    }

    echo json_encode($response);
}

if (isset($_POST['cutomerDetails'])) {
    //$customer_result='';
    $room_id = $_POST['room_id'];

    if ($room_id != '') {
        $sql = "SELECT * FROM room NATURAL JOIN room_type NATURAL JOIN booking NATURAL JOIN customer WHERE room_id = '$room_id' AND payment_status = '0'";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            $customer_details = mysqli_fetch_assoc($result);
            $id_type = $customer_details['id_card_type_id'];
            $query = "select id_card_type from id_card_type where id_card_type_id = '$id_type'";
            $result = mysqli_query($connection, $query);
            $id_type_name = mysqli_fetch_assoc($result);
            $response['done'] = true;
            $response['customer_id'] = $customer_details['customer_id'];
            $response['customer_name'] = $customer_details['customer_name'];
            $response['contact_no'] = $customer_details['contact_no'];
            $response['email'] = $customer_details['email'];
            $response['id_card_no'] = $customer_details['id_card_no'];
            $response['id_card_type_id'] = $id_type_name['id_card_type'];
            $response['address'] = $customer_details['address'];
            $response['remaining_price'] = $customer_details['remaining_price'];
        } else {
            $response['done'] = false;
            $response['data'] = "DataBase Error";
        }

        echo json_encode($response);
    }
}

//company signup
if (isset($_POST['join'])) {
    extract($_POST);
    $conn = mysqli_connect("localhost", "root","","mis");
    if(isset($_POST['create'])){

    $comp_name = $_POST['comp_name'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];    
    $bounty_minimum = $_POST['bounty_minimum'];
    $bounty_average = $_POST['bounty_average']; 
    $pass = $_POST['pass'];    

        $sql = "INSERT * INTO staff (comp_name, conctact_no, email, bounty_minimum, bounty_average, pass)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$comp_name, $contact_no, $email, $bounty_minimum, $bounty_average, $pass]);
        if($result){
            echo "Succesfull saved";
        }else{
            echo "FAILED";
        }

    }
    
    $sql = "INSERT INTO staff (comp_name, contact_no, email, bounty_minimum, bounty_average, pass)
        
        VALUES ('$comp_name', '$contact_no', '$bounty_minimum', '$email', '$bounty_average', $pass)";
    if ($conn->query($sql) === TRUE) {  
        header('Location: comlog.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
} 
//Admin login
   if (isset($_POST['enter'])) {
	extract($_POST_DATA);
    $comp_name = $_POST['comp_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!$username && !$email && !$pass) {
        header('Location:comlog.php?empty');
    } else {
        $pass = md5($pass);
        $query = "SELECT * FROM staff WHERE  comp_name = '$comp_name' OR email='$email' AND pass='$pass'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
			$_SESSION['comp_name'] = $comp_name['comp_name'];
			$_SESSION['pass'] = $user['pass'];
            header('Location:admhome.php');
        } else {
            header('Location:admhome.php?loginE');
        }
    }

} 

//complaint
if (isset($_POST['createComplaint'])) {
    $complainant_name = $_POST['complainant_name'];
    $complaint_type = $_POST['complaint_type'];
    $complaint = $_POST['complaint'];

    $query = "INSERT INTO complaint (complainant_name,complaint_type,complaint) VALUES ('$complainant_name','$complaint_type','$complaint')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location:home.php?complain&success");
    } else {
        header("Location:home.php?complain&error");
    }

}

//not yet assigned
if (isset($_POST['resolve_complaint'])) {
    $budget = $_POST['budget'];
    $complaint_id = $_POST['complaint_id'];
    $query = "UPDATE complaint set budget = '$budget',resolve_status = '1' WHERE id='$complaint_id'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location:index.php?complain&resolveSuccess");
    } else {
        header("Location:index.php?complain&resolveError");
    }
}

//updating profile
if (isset($_POST['update'])) {
    $fname = "UPDATE user set fname = '$fname'";
    $username = "UPDATE user set username = '$username'";
    $email = "UPDATE user set email = '$email'";
    $password = "UPDATE user set pass = '$pass'";
    $result = mysqli_query($connection, $query);
    $update_result = mysqli_query($connection,$update);
    $insert = "INSERT INTO user (fname,username,email, pass) VALUES ('$fname','$username', '$email','$pass')";
    $insert_result = mysqli_query($connection,$insert);

    if ($result && $insert_result && $update_result) {
        header("Location:home.php?success");
    } else {
        header("Location:home.php?error");
    }
}

//report submission
if (isset($_POST['report'])) {  
    extract($_POST);  
    // Create connection  
    $conn = mysqli_connect("localhost","root","","mis");  
    // post the information in the database
    if(isset($_POST['create'])){
     
        $comp_name = $_POST['comp_name'];
        $title = $_POST['title'];
        $details = $_POST['details'];
        $descrpt = $_POST['descrpt'];
       
        $user = $_POST['user'];
       
        $sql = "INSERT INTO submissions (comp_name, title,details, descrpt,user) VALUES(?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$comp_name, $title, $details, $descrpt, $user]);
        if($result){
            echo "Successfully Submitted";
        }else{
            echo "submission failed";
        }
        
       }
   
    $sql = "INSERT INTO `submissions` (comp_name,title,details, descrpt, user) 
  
VALUES ('$comp_name','$title','$details', '$descrpt', '$user')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: submit.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
}   