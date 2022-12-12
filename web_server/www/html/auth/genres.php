<?php

require_once 'connect.php';

$sql = "SELECT * FROM genres";
$query = $connect->query($sql);

while($temp = $query->fetch(PDO::FETCH_ASSOC)){
    $genres[] = $temp;
}
?>