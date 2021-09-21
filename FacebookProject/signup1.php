<?php
include "APIs/connection.php";

if(isset($_POST["firstname"]) && $_POST["firstname"] != "" && strlen($_POST["firstname"]) >= 3) {
    $first_name = $_POST["firstname"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["lastname"]) && $_POST["lastname"] != "" && strlen($_POST["lastname"]) >= 3) {
    $last_name = $_POST["lastname"];
}else{
    die ("Enter a valid input");
}


if(isset($_POST["gender"]) && $_POST["gender"] != "" ) {
    $gender = $_POST["gender"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["Email"]) && $_POST["Email"] != "" ) {
    $email = $_POST["Email"];
}else{
    die ("Enter a valid input");
}


if(isset($_POST["password"]) && $_POST["password"] != "" ) {
    $password = $_POST["password"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["confpassword"]) && $_POST["confpassword"] != "" ) {
    $confirmPassword = $_POST["confpassword"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["city"]) && $_POST["city"] != "" ) {
    $city = $_POST["city"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["country"]) && $_POST["country"] != "" ) {
    $cont= $_POST["country"];
}else{
    die ("Enter a valid input");
}



if ( $password != $confirmPassword){
	session_start();
    $_SESSION["flash"] = "Please Confirm Password!";
    header('location:signup.php');
	exit;
}
	

$sql1="Select * from users where email=?"; #Check if the email already exists in the database
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("s",$email);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

if(empty($row)){
$sql2 = "INSERT INTO `users` (`first_name`, `last_name`, `gender`, `email`, `password`, `city`,`country`) VALUES (?, ?, ?, ?, ?, ?, ?);"; #add the new user to the database
$hash = hash('sha256', $password);
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("sssssss",$first_name,$last_name,$gender,$email,$hash,$city,$cont);
$stmt2->execute();
$id = $stmt2->insert_id;
session_start();
$_SESSION["id"] = $id;
$_SESSION["flash"] = "";
header('location:login.php');
}
else{
    session_start();
    $_SESSION["flash"] = "Email Already Exists";
    header('location:signup.php');
}
?>