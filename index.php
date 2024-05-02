<!doctype html>
<html lang="ru-Ru">
<head>
<title>Сюрприз - Студия организации праздников</title>
<meta charset="utf-8">
<?php include 'lib/module/sys-meta.php';?>
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<img src="/img/graphics/landing/фото.png" width="1" height="1" alt="preload"/>
<img src="/img/videos/1.jpg" width="0.5" height="0.5" alt="Preload"/>
<img src="/img/videos/2.jpg" width="1" height="1" alt="Preload"/>
<img src="/img/videos/3.jpg" width="1" height="1" alt="Preload"/>
<?php include 'lib/module/sys-php.php';?>
<?php include 'lib/module/home/inc-home-player.php'?>
<?php
	preloadVideo(
	'1',
	'mKON3RwjnEU',
	'1'
	);
	preloadVideo(
	'2',
	'xUpw9bHmoac',
	'2'
	);
	preloadVideo(
	'3',
	'gIcsUr7W00k',
	'3'
	);
?>
<div class="page-con-content landing-con-override">
	<div class="wavebar-con-container-master">
		<div class="wavebar-con-wrap">
			<div class="wavebar-svg-object">
			</div>
			<div class="wavebar-svg-object">
			</div>
		</div>
	</div>
	<div class='landing-ico-scrolldown'>
	</div>
	<div class="landing-con-main">
		<div id="object-particles">
		</div>
		<div class="content-con-backdrop darkmode-header">
		</div>
		<div class="content-con-outside">
			<div class="content-con-inside">
				<div class='landing-con-left content-expand '>
					<div class="landing-con-container scale-content-txt-1 fade-in-onload">
						<div class='landing-ico-logo'>
						</div>
						<div class='landing-tx1-heading pulsate'>
							<h1>Студия Сюрприз<br>
							 Организация Праздников</h1>
						</div>
						<div class='landing-tx2-heading'>
							<p>
								 Устраиваем праздники для всей семьи, дни рождения, юбилеи, выпускные, Новый год и многое другое.
							</p>
						</div>
					</div>
				</div>
				<div class='landing-con-right content-remove '>
					<div class='landing-img-hero' style="background: url(/img/graphics/landing/фото.png) no-repeat center; background-size: contain;">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="landing-con-handheld darkmode-feature">
		<div class="handheld-img-backdrop">
		</div>
		<div class="handheld-img-overlay">
		</div>
		<div class="content-con-outside">
			<div class="content-con-inside">
				<div class="video-tx1-heading darkmode-txt">
					<h2>Разнообразие игр</h2>
				</div>
				<div class="video-con-divider">
				</div>
				<div class="handheld-con-container">
					<div class="handheld-con-screen">
						<div class="handheld-img-screen">
							<img alt="1" src="img/graphics/landing/handheld-1.jpg" style='height: 100%; width: 100%; object-fit: contain'/>
						</div>
					</div>
					<div class="handheld-txt-container">
						<div class="handheld-tx1-title darkmode-txt">
							<span>Огромный выбор разнообразных программ</span>
						</div>
						<div class="handheld-tx2-desc darkmode-txt">
							<span>Все аниматоры професионалы и качественно выполняют свою работу</span>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="landing-con-video darkmode-feature">
	<div class="featured-img-overlay darkmode-invert">
		</div>
		<div class="content-con-outside">
			<div class="content-btn-left darkmode-arrow-left left" href="#myCarousel" data-slide="prev">
			</div>
			<div class="content-btn-right darkmode-arrow-right right" href="#myCarousel" data-slide="next">
			</div>
			<div class="content-con-inside">
				<div class="video-tx1-heading darkmode-txt">
					<h2>Видео галерея</h2>
				</div>
				<div class="video-con-divider">
				</div>
				<?php include 'lib/module/home/inc-home-carousel.php';?>
			</div>
		</div>
	</div>
	<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
</html>