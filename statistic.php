
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
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<link rel="stylesheet" href="css/style.css"/>

</head>

<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>
		<a href="index.php" class="site-logo">
			<img src="img/logo2.png" alt="">
		</a>

        <section class="hero-section1 set-bg" data-setbg="img/fon.jpg">
	        <div class="container">
			<div class="section-titleeee">
				<h2>Статистика</h2>
				<p>На данной странице вы можете узнать немного статистики.</p>
			</div>
            <form action="statistic.php">
                <button name='year' class='year'>Посмотреть года выпуска автомобилей</button>
            </form>
            <form action="statistic.php">
                <select class="select" name='select1' id='select1'>
                    <?php for($i = 2011; $i <= date('Y'); $i++): ?>
                        <option value="<?php echo $i; ?>" <?php if(isset($_GET['select1'])&&$_GET['select1']==$i) echo "selected" ?>><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
                <select class="select1" name='select2' id='select2'>
                        <option selected></option>
                    <?php for($i = 2011; $i <= date('Y'); $i++): ?>
                        <option value="<?php echo $i; ?>" <?php if(isset($_GET['select2'])&&$_GET['select2']==$i) echo "selected" ?>><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
                <select class="type" name='type' id='type'>
                        <option value="bar">Bar</option>
                        <option value="line">Line</option>
                        <option value="pie">Pie</option>
                </select>
                <button class='select_btn'>Посмотреть</button>
            </form>
	</div>
		<div class="container">
			
		</div>
	</section>

    <section class="intro-section spad">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                <div>
                    <canvas width="600" height="430" id="myChart"></canvas>
                </div>
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
	<script src="js/main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = [];

        const data = {
            labels: labels,
            datasets: [
                {
                    label: '',
                    backgroundColor:[
                        '#00FF00',
                        '#20B2AA',
                        '#7B68EE',
                        '#8A2BE2'
                    ],
                    borderColor: '#20B2AA',
                    hoverOffset: 4,
                    data: [],
                },
                {
                    label: '',
                    backgroundColor:[
                        '#00FF00',
                        '#20B2AA',
                        '#7B68EE',
                        '#8A2BE2'
                    ],
                    borderColor: '#00FF00',
                    hoverOffset: 4,
                    data: [],
                },
            ]
        };

        const config = {
            type: '',
            data: data, 
            options: {
                indexAxis: 'x',
                plugins:{
                    legend:{
                        display: true,
                        position: 'bottom',
                    },
                    title:{
                        display: true,
                        text:''
                    }
                }
            }
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

</body>
</html>