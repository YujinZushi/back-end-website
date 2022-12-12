<?php
require_once 'connect.php';
function topic_messages($topic_id){
    global $connect;
    $sql = "SELECT * FROM messages WHERE topic_fk = " . $topic_id;
    $query = $connect->query($sql);
    while($temp = $query->fetch(PDO::FETCH_ASSOC)){
        $messages[] = $temp;
    }
    return $messages;
}
?>