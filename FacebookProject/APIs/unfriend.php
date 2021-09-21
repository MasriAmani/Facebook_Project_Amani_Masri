<?php
include "connection.php";
$id = $_GET["id"];
$fid = $_GET["fid"];
$query = "Delete from connections where (user_id_from = ? and user_id_to = ?)  or (user_id_to = ? and user_id_from = ?) ;";
$stmt = $connection->prepare($query);
$stmt->bind_param("iiii",$id,$fid,$id,$fid);
$stmt->execute();
?>