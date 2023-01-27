<!DOCTYPE html>
<html>
<head>
	<title>FD</title>
	<meta charset="UTF-8">
	<meta name="description" content="Real estate HTML Template">
	<meta name="keywords" content="real estate, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900%7cRoboto:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>

	<link rel="stylesheet" href="css/style.css"/>

</head>

<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>

		<a class="site-logo">
			<img src="img/logo2.png" alt="">
		</a>
		
	<section class="hero-section set-bg" data-setbg="img/fon.jpg">
		<a href='statistic.php' class="statistic">Статистика</a>
	<div class="container">
			<div class="section-titlee">
				<h2>Проверка водителя по номеру автомобиля</h2>
				<p>Введите номер автомобиля и убедитесь в безопасности поездки с данным водителем</p>
			</div>
	</div>
		<div class="container">
				<form class="main-search-form" action="result.php" method="$_GET">
					<!-- <div class="search-input">
						<input class="search-input" name="number" type="text" placeholder="Введите номер автомобиля" required>
						<button class="site-btn">Поиск</button>
					</div> -->
					<div class="vegukonem-nenkaepren">
  						<div class="vedanageous">
							<input type="text" class="input" name="number" placeholder="Введите номер автомобиля" required pattern="[АВЕКМНОРСТУХ]{1}\d{3}[АВЕКМНОРСТУХ]{2}\d{1,3}|[АВЕКМНОРСТУХ]{2}\d{5}">
							<button class="search-btn"><i class="fa fa-search"></i></button>
  						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<footer class="footer-section">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-4">
					<div class="footer-widger">
						<div class="about-widget">
							<div class="aw-text">
								<img src="img/logo1.png" alt="">
							</div>
						</div>
					</div>
					Открытые данные взяты с сайта <a href="https://data.mos.ru/">data.mos.ru.</a>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>Разработчик</h2>
						<ul>
							<li><a href="#">Крайнов Кирилл</a></li>
							<li><h2>Контакты</h2></li>
							<li><a href="#">Email: kirilldrakon03@mail.ru</a></li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
