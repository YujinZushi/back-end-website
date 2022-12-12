<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Мир музыки</title>
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
				<h1>Жанры электронной музыки</h1>
				<div class="description">
					<p>Электронная музыка — музыка, созданная с использованием синтезаторов, электромузыкальных инструментов и электронных технологий. Как специфическое направление в мире музыки электронная музыка оформилась во второй половине XX века и к началу XXI века широко распространилась в академической и массовой культуре. До последней трети XX века электронная музыка ассоциировалась, главным образом, с экспериментами в академической музыке, но это положение дел изменилось с налаживанием серийного производства синтезаторов звука в 1970-е годы. Синтезаторы благодаря своей умеренной стоимости стали доступны широкой публике. Это изменило образ популярной музыки — синтезаторы стали использовать многие джазовые, рок и поп музыканты. Существенную часть в становлении электронной музыки занимало сэмплирование - запись, воспроизведение и обработка заранее записаных звуков. Всё это привело к образованию множества <span>новых жанров</span>, представленных на этой странице.</p>
				</div>
			</div>
		</section>

		<section id="frames">
			<div class="container">


				<div class="frame">
						<div class="inner">
							<h2>House</h2>
							<a href="page1.html"><img src="https://wallpaperlepi.com/wp-content/uploads/2014/09/DJ-Music-Wallpaper-Photos.jpg"></a>
							<p>Направления электронной музыки <a href="page1.html#house">хаус</a> и <a href="page1.html#techno">техно</a> зародились в 1980-х годах в США (Детройт, Чикаго). Более поздний стиль электронной музыки <a href="page1.html#trance">транс</a>, появившийся в 1990-х и набравший популярность к середине нулевых, перенял много общего от хауса и техно. Основными особенностями такой музыки являются повторяемые ритм-биты, обычно в размере 4/4, и «сэмплинг», то есть работа со звуковыми вставками, которые повторяются, время от времени в музыке, частично совпадая с её ритмом</p>
						</div>
				</div>

				<div class="frame">
						<div class="inner">
							<h2>Garage</h2>
							<a href="page2.html"><img src="https://nbhap.com/wp-content/uploads/2017/11/Burial-Logo.jpg"></a>
							<p><a href="page2.html#garage">Гараж</a> — жанр танцевальной электронной музыки, возникший в начале 1980-х годов в Нью-Йорке, и получивший популярность в исполнении музыкантов из Нью-Джерси. Фактически гараж - это тот же классический Чикагский хаус, но сделан больший акцент на соул и госпел вокале. По звучанию гэридж характеризуется темпом порядка 138 ударов в минуту, свингующим ритмом, плотными басами и общим «разнузданным» звучанием. Из гэриджа проистекает множество направлений, таких как <a href="page2.html#ukg">UK garage</a>, speed garage, breakbeat garage, 2-step и <a href="page2.html#dubstep">dubstep</a>.</p>
						</div>
				</div>

				<div class="frame">
						<div class="inner">
							<h2>Breakbeat</h2>
							<a href="page3.html"><img src="https://cdn.pbilet.com/origin/8f05dbe5-7cbc-4718-a347-dedc58868063.jpeg"></a>
							<p><a href="page3.html#breakbeat">Брейкбит</a> — термин, объединяющий класс жанров электронной музыки на основе ударной партии с ломаным ритмом, или же непосредственно сами эти ударные партии. Это направление электронной музыки, в которой, как правило, используются барабанные брейки, взятые из ранних записей фанка, джаза и R&B. Из брейкбита вырасли такие музыкальные стили, как <a href="page3.html#dnb">драм-энд-бэйс</a>, хардкор-брейкбит, биг бит, а так же <a href="page3.html#neurofunk">нейрофанк</a>.</p>
						</div>
				</div>

				<div class="frame">
						<div class="inner">
							<h2>Ambient & Lo-Fi</h2>
							<a href="page4.html"><img src="https://dazedimg-dazedgroup.netdna-ssl.com/1080/0-0-1080-720/azure/dazed-prod/1280/8/1288188.jpg"></a>
							<p>Электронная музыка таких стилей, как <a href="page4.html#ambient">эмбиент</a>, <a href="page4.html#lofi">лоуфай</a> или <a href="page4.html#chillout">чил-аут</a>, в отличии от большей части электронной музыки, не является танцевальной. В этих жанрах может не быть ударной партии. Внимание слушателя сосредатачивается на атмосфере и общем звучании композиции, погружая его в некий транс, например, для достижения спокойствия и пространства для размышлений. Расслабляющая неброская музыка может служить фоном для выполнения рутинных повседневных задач, за что очень ценится слушателями.</p>
						</div>
				</div>

			</div>
		</section>
	</div>

	<?php require "blocks/footer.php" ?>
<script src="js/script.js"></script>
</body>
</html>
