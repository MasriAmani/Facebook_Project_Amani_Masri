<?php
include "connection.php";
$id = $_GET["id"];
$uid = $_GET["uid"];

$query ="Insert into connections (user_id_from , user_id_to ,connection_type) values (?,?,2)";
$stmt = $connection->prepare($query);
$stmt->bind_param("ii",$id,$uid);
$stmt->execute();
 
?>