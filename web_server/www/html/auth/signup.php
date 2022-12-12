<?php

    session_start();
    require_once 'connect.php';

    $nickname = $_POST['nickname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке картинки';
            header('Location: ../register.php');
        }

        $password = hash('sha256', $password);

        $sql = "INSERT INTO users (nickname, login, email, password, avatar) VALUES (?, ?, ?, ?, ?)";
        $add_user = $connect->prepare($sql);
        $add_user->execute([$nickname, $login, $email, $password, $path]);

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../auth.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
