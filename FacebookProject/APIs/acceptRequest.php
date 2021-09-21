<?php
include "connection.php";
$id = $_GET["id"];
$uid = $_GET["uid"];//the one that sent the request

$query ="Update connections set connection_type = 0 where user_id_from = ? and  user_id_to =?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("ii",$uid,$id);
$stmt->execute();

$query ="Select * from users where id = ?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$first_name = $row["first_name"];
$last_name = $row["last_name"];

$query ="Insert into notifications (user_id ,message) values (?,'$first_name $last_name accepted your friend request');";
$stmt = $connection->prepare($query);
$stmt->bind_param("i",$uid);
$stmt->execute();

 
?>