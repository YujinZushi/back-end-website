<?php

    session_start();
    require_once 'connect.php';

    $msg_text = $_POST['msg_text'];
    $user_fk = $_SESSION['user']['id'];
    $topic_fk = $_SESSION['user']['topic'];
    if (!empty($msg_text)) {

        /*
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке картинки';
        }
        */

        $sql = "INSERT INTO messages (msg, user_fk, topic_fk, msg_date) VALUES (?, ?, ?, now() at time zone 'Europe/Moscow')";
        $query = $connect->prepare($sql);
        $query->execute([$msg_text, $user_fk, $topic_fk]);
    }

    header('Location: ../topic.php?id=' . $topic_fk . '#newmsg');

?>
