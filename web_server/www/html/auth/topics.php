<?php

require_once 'connect.php';

$sql = "SELECT * FROM topics";
$query = $connect->query($sql);

while($temp = $query->fetch(PDO::FETCH_ASSOC)){
    $topics[] = $temp;
}
?>