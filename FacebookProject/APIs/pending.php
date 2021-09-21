<?php
include "connection.php";
$id = $_GET["id"];
$query = "SELECT * from users u  where u.id <> ? and u.id in (select user_id_from from connections where user_id_to = ? and connection_type = 1);";
$stmt = $connection->prepare($query);
$stmt->bind_param("ii",$id,$id);
$stmt->execute();
$result = $stmt->get_result();
$array =[];
while($row = $result->fetch_assoc()){

$array[] = $row;
}

$json = json_encode($array,JSON_PRETTY_PRINT);
echo $json;
?>