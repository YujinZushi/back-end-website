<?php

    session_start();
    require_once 'connect.php';

    $topic_name = $_POST['topic_name'];
    $topic_genre = $_POST['topic_genre'];
    $msg_text = $_POST['msg_text'];
    $user_fk = $_SESSION['user']['id'];
    if (!empty($topic_name) and !empty($msg_text)) {

        //new topic
        $sql = "INSERT INTO topics (name, genre_fk) VALUES (?, ?)";
        $query = $connect->prepare($sql);
        $query->execute([$topic_name, $topic_genre]);

        //topic id
        $sql = "SELECT MAX(topic_id) FROM topics";
        $query = $connect->query($sql);
        $topic_fk = $query->fetch(PDO::FETCH_ASSOC);

        //new msg
        $sql = "INSERT INTO messages (msg, user_fk, topic_fk, msg_date) VALUES (?, ?, ?, now() at time zone 'Europe/Moscow')";
        $query = $connect->prepare($sql);
        $query->execute([$msg_text, $user_fk, $topic_fk['max']]);

        header('Location: ../topic.php?id=' . $topic_fk['max']);
    } else {
        header('Location: ../forum.php');
    }
    
?>