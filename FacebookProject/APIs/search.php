<?php

include "connection.php";
$id = $_GET["id"];
$key = $_GET["key"];
/* selecting users that are not friends with this user,dont have a friend request to this user nor the user friend requested them, and not blocked by this user nor blocking this user */
$query = "SELECT * from users u where (u.first_name like '$key%' or  last_name like '$key%') and u.id <> $id and u.id not in (select user_id_to from connections where user_id_from =$id ) and u.id not in (select user_id_from from connections where user_id_to=$id ) ;";
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$array =[];
while($row = $result->fetch_assoc()){

$array[] = $row;
}

$json = json_encode($array,JSON_PRETTY_PRINT);
echo $json;
?>