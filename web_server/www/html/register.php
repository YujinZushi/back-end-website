<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Регистрация</title>
	<meta name="description" content="Разнообразие электронной музыки">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="img/music.png" type="image/png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#A12568">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#A12568">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#A12568">

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/adaptive.css">
</head>
<body>

    <div class="wrapper">
            <?php require "blocks/header.php" ?>

        <!-- Форма регистрации -->
        <section id="content">
            <div class="form">
                <form action="auth/signup.php" method="post" enctype="multipart/form-data">
                    <label>Отображаемое имя</label>
                    <input type="text" name="nickname" placeholder="Введите свой псевдоним">
                    <label>Логин</label>
                    <input type="text" name="login" placeholder="Введите свой логин">
                    <label>Почта</label>
                    <input type="email" name="email" placeholder="Введите адрес своей почты">
                    <label>Изображение профиля</label>
                    <input type="file" name="avatar">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль">
                    <label>Подтверждение пароля</label>
                    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
                    <?php
                        if (isset($_SESSION['message'])) {
                            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                    ?>
                    <div>
                        <button type="submit">Зарегистрироваться</button>
                        <p>
                            Уже есть аккаунт? - <a href="/auth.php">авторизируйтесь</a>!
                        </p>
                        </div>
                </form>
            </div>
        </section>
    </div>
    <?php require "blocks/footer.php" ?>    
</body>
</html>