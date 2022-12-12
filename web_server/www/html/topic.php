<?php 
    session_start();
	$topic_id = $_GET['id'];
	if (isset($_SESSION['user'])) {
		$_SESSION['user']["topic"] = $topic_id;
	}

    require_once './auth/topics.php';
	require_once './auth/messages.php';
	require_once './auth/msg_user.php';
	
	$messages = topic_messages($topic_id);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Форум</title>
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
		<section id="main">
		<div class="container">
			<h1><?php 
				$sql = "SELECT name FROM topics WHERE topic_id = " . $topic_id;
				$query = $connect->query($sql);
				$name = $query->fetch(PDO::FETCH_ASSOC);
				echo $name['name'];
			?></h1>
		</div>
		</section>

		<?php foreach ($messages as $message): ?>
			<section id="content" style="text-align: centre;">
				<div class="description message" style="margin: 5%; padding: 1em; width: 90%;">
					<div style="width: 15em;">
						<h1><?php
								$user = msg_user($message['user_fk']);
								echo $user['nickname']
						?></h1>
						<img src="<?= $user['avatar']?>" width="200" alt="<?= $user['nickname']?>">
						<p style="background: none;"><?= gmdate("Y-m-d H:i", strtotime($message['msg_date'])) ?></p>
					</div>
					<p class="topic_body" style="margin: 0; margin-left: 1em; width: 100%; text-align:left; word-break: break-word;"><?= $message['msg'] ?></p>
				</div>
			</section>
		<?php endforeach; ?>

		<section id="content">
			<div id="newmsg" class="description" style="margin: 5%; padding: 1em; width: 90%;">
				<form action="auth/new_msg.php" method="post" enctype="multipart/form-data" style="display: flex;">
					<input type="text" name="msg_text" placeholder="Сообщение">
					<button type="submit" style="margin-left: 1em;">Отправить</button>
				</form>
			</div>
		</section>
	</div>

	<?php require "blocks/footer.php" ?>

	<script src="js/script.js"></script>

</body>
</html>
