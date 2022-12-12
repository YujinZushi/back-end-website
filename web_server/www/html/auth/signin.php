<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM users WHERE login = ? AND password = ?";
    $check_user = $connect->prepare($sql);
    $check_user->execute([$login, $password]);
    if ($check_user->rowCount() > 0) {

        $user = $check_user->fetch(PDO::FETCH_ASSOC);

        $_SESSION['user'] = [
            "id" => $user['user_id'],
            "login" => $user['login'],
            "nickname" => $user['nickname'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "topic" => NULL
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../auth.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
