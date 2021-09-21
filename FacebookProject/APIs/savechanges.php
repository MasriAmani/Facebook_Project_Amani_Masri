<?php
include "connection.php";
$id = $_POST["id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$pass = $_POST["pass"];
$gen = $_POST["gen"];
$city = $_POST["city"];
$country = $_POST["count"];


$hash = hash('sha256', $password);



$query = "update users set first_name = ?, last_name = ?, password = ?,gender = ? , city = ?,country =? where id= ? ;";
$stmt = $connection->prepare($query);
$stmt->bind_param("ssssssi",$first_name,$last_name,$hash,$gen,$city, $country ,$id);
$stmt->execute();
?>