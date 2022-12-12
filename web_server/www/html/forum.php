<?php 
    session_start();
    require_once './auth/topics.php';
	require_once './auth/msg_user.php';
	require_once './auth/messages.php';
	require_once './auth/genres.php';

	if (!isset($_SESSION['user'])) {
		header('Location: auth.php');
	}
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
			<h1>Форум</h1>
		</div>
		</section>
		<session style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
		<!-- Создание нового топика -->
			<div class="form newtopic">
				<form action="auth/new_topic.php" method="post" enctype="multipart/form-data">
					<label>Название темы</label><br>
					<input type="text" name="topic_name" placeholder="Название темы" minlength="4" maxlength="35" required><br>
					<label>Сообщение</label><br>
					<input type="text" name="msg_text" placeholder="Сообщение" minlength="10" maxlength="200" required><br>
					<div>
						<button type="submit">Создать тему</button>
						<select name="topic_genre" placeholder="Жанр темы">
							<?php foreach ($genres as $genre): ?>
								<option value=<?= $genre['genre_id'] ?>>
									<?= $genre['name'] ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>
					
				</form>
			</div>

		<!-- Топики -->
		<?php foreach ($topics as $topic): ?>
			<?php 
				$topic_id = $topic['topic_id'];
				$sql = "SELECT * FROM messages WHERE msg_id = (SELECT MIN(msg_id) FROM messages WHERE topic_fk = $topic_id) LIMIT 1";
				$query = $connect->query($sql);
				$title_message = $query->fetch(PDO::FETCH_ASSOC);

				$user = msg_user($title_message['user_fk']);
			?>
				<a href="<?='topic.php?id=' . $topic['topic_id']?>" style="color: inherit;">
					<div class="description topic" style="width: 28em">
						<div class="topic_head" style="display: flex; flex-direction: row; justify-content: left;">

							<!-- Фото автора первого сообщения топика -->
							<img src="<?= $user['avatar']?>" width="200" alt="<?= $user['nickname']?>">

							<div style="margin-left: 1em">
								<!-- Имя автора первого сообщения топика -->
								<h1><?= $user['nickname'] ?></h1>

								<!-- Дата создания топика -->
								<p><?= gmdate("Y-m-d H:i", strtotime($title_message['msg_date'])) ?></p>
							</div>
						</div>
						<div class="topic_body">

							<!-- Название топика -->
							<h1 style="color: #FEC260; FONT-SIZE: 20px;"><?= $topic['name'] ?></h1>

							<!-- Текст первого сообщения топика -->
							<p><?= $title_message['msg'] ?></p>
						</div>
						<div class="topic_footer" style="display: flex; flex-direction: row; justify-content: space-between;">

							<!-- Жанр топика -->
							<p>Жанр: <?php
								foreach ($genres as $genre){
									if ($genre['genre_id'] == $topic['genre_fk']) {
										echo $genre['name'];
									}
								}
							?></p>

							<!-- Количество сообщений топика -->
							<p>Сообщений: <?= count(topic_messages($topic_id)) ?></p>
						</div>
					</div>
				</a>
		<?php endforeach; ?>
		<session>
	</div>
						
	<?php require "blocks/footer.php" ?>

	<script src="js/script.js"></script>

</body>
</html>
