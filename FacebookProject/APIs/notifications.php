<?php
include "connection.php";
$id = $_GET["id"];
$query = "Select message from notifications where user_id  = ?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();
$result = $stmt->get_result();
$array =[];
while($row = $result->fetch_assoc()){

$array[] = $row;
}

$json = json_encode($array,JSON_PRETTY_PRINT);
echo $json;
?>