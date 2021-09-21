<?php
include "connection.php";
$id = $_GET["id"];
$uid = $_GET["uid"];

$query ="Insert into connections (user_id_from , user_id_to ,connection_type) values (?,?,1)";
$stmt = $connection->prepare($query);
$stmt->bind_param("ii",$id,$uid);
$stmt->execute();
 
$query ="Select * from users where id = ?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$first_name = $row["first_name"];
$last_name = $row["last_name"];

$query ="Insert into notifications (user_id ,message) values (? ,'$first_name $last_name has sent you a friend request');";
$stmt = $connection->prepare($query);
$stmt->bind_param("i",$uid);
$stmt->execute();

 
?>