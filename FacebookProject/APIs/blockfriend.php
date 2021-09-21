<?php
include "connection.php";
$id = $_GET["id"];
$fid = $_GET["fid"];
$query = "Select * from connections where user_id_from = ? and user_id_to = ?;"; 
$stmt = $connection->prepare($query);
$stmt->bind_param("ii",$id,$fid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
 if(empty($row)){
$query  =" Delete from connections where user_id_from = ? and user_id_to = ?;";    //if the current user who wants to block is not a user_from in the connections table ,delete the connection
$stmt = $connection->prepare($query);
$stmt->bind_param("ii",$fid,$id);
$stmt->execute();
$query1 ="Insert into connections (user_id_from , user_id_to ,connection_type) values (?,?,2)";  //make a new connection where the current user is a user_from and the connection_type is "blocked"
$stmt1 = $connection->prepare($query1);
$stmt1->bind_param("ii",$id,$fid);
$stmt1->execute();
 }
 else {
	$query = "Update connections set connection_type = 2 where (user_id_from = ? and user_id_to = ?) ;";  // if the current user who wants to block is a user_from just update the connection_tyoe to "blocked"
    $stmt = $connection->prepare($query);
	$stmt->bind_param("ii",$id,$fid);
    $stmt->execute();
 }
?>