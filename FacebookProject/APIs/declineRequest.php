<?php
include "connection.php";
$id = $_GET["id"];
$uid = $_GET["uid"];//the one that sent the request

$query ="Delete from connections where user_id_from = ? and  user_id_to = ?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("ii",$uid,$id);
$stmt->execute();

 
?>