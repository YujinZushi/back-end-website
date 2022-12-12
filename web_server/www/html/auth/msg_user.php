<?php
require_once 'connect.php';
function msg_user($msg_id){
    global $connect;
    $sql = "SELECT nickname, avatar, email FROM users WHERE user_id = " . $msg_id;
    $query = $connect->query($sql);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    return $user;
}
?>