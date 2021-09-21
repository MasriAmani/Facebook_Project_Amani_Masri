<?php
include "connection.php";
$id = $_GET["id"];

$query ="Select u.id, u.first_name ,u.last_name ,u.gender , u.city ,u.country from users u, connections c where u.id = c.user_id_to and c.user_id_from = ? and connection_type = 2;";
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