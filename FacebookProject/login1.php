<?php
include("APIs/connection.php");
session_start();

if(isset($_POST["Email1"]) && $_POST["Email1"] != ""){
		$email = $_POST["Email1"];
	}
else{
		die("Don't try to mess around bro 1;)");
	}

if(isset($_POST["password1"]) && $_POST["password1"] != ""){
		$password = hash('sha256', $_POST['password1']);

	}
else{
		die("Don't try to mess around bro 2;)");
	}
	
	
$query = "Select * from users";
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

while($row = $result->fetch_assoc()){
    if($email == $row["email"] && $password == $row["password"]){
	     $_SESSION['id'] = $row['id'];
  	      header('location: home.php');
		  exit;
		}
	}  
	
$_SESSION['flash']= "Wrong Email or Password!";
 header('location: login.php');
	

?>