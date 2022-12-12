<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Профиль</title>
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
        <!-- Профиль -->
        <section id="content">
            <div class="profile">
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="фото пользователя">
                <h2 style="margin: 10px 0;"><?= $_SESSION['user']['nickname'] ?></h2>
                <label>Логин</label>
                <p><?= $_SESSION['user']['login'] ?></p><br>
                <label>Почта</label>
                <p><?= $_SESSION['user']['email'] ?></p><br>
                <a href="auth/logout.php" class="logout">Выход</a>
            </div>
        </section>
    </div>
    <?php require "blocks/footer.php" ?>
</body>
</html>