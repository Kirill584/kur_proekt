<?php
$db_host = 'localhost';
$db_user = 'root'; 
$db_password = ''; 
$database = 'kur_pr'; 
$mysql = mysqli_connect($db_host, $db_user, $db_password);
mysqli_select_db($mysql, $database) or die("Cannot connect DB");
$number=$_GET['number'];
$query = "SELECT * FROM drivers WHERE VehicleNumber='	$number	'"; 
$queryy = "SELECT * FROM drivers WHERE VehicleNumber='	$number'"; 
$queryyy = "SELECT * FROM drivers WHERE VehicleNumber='$number	'"; 
$result = mysqli_query($mysql, $query);
$resultt = mysqli_query($mysql, $queryy);
$resulttt = mysqli_query($mysql, $queryyy);
$row_cnt = $result->num_rows;
$row_cntt = $resultt->num_rows;
$row_cnttt = $resulttt->num_rows;
$Ar = mysqli_fetch_array($result);
$Arr = mysqli_fetch_array($resultt);
$Arrr = mysqli_fetch_array($resulttt);
if($row_cnt!=0){
$license_number = $Ar['LicenseNumber'];
}
if($row_cntt!=0){
$license_number = $Arr['LicenseNumber'];
}
if($row_cnttt!=0){
$license_number = $Arrr['LicenseNumber'];
}
if($row_cnt!=0){
$INN = $Ar['INN'];
}
if($row_cntt!=0){
$INN = $Arr['INN'];
}
if($row_cnttt!=0){
$INN = $Arrr['INN'];
}
if($row_cnt!=0){
$OGRN = $Ar['OGRN'];
}
if($row_cntt!=0){
$OGRN = $Arr['OGRN'];
}
if($row_cnttt!=0){
$OGRN = $Arrr['OGRN'];
}
if($row_cnt!=0){
$blank_number = $Ar['BlankNumber'];
}
if($row_cntt!=0){
$blank_number = $Arr['BlankNumber'];
}
if($row_cnttt!=0){
$blank_number = $Arrr['BlankNumber'];
}
if($row_cnt!=0){
$vehicle_brand = $Ar['VehicleBrand'];
}
if($row_cntt!=0){
$vehicle_brand = $Arr['VehicleBrand'];
}
if($row_cnttt!=0){
$vehicle_brand = $Arrr['VehicleBrand'];
}
if($row_cnt!=0){
$vehicle_year = $Ar['VehicleYear'];
}
if($row_cntt!=0){
$vehicle_year = $Arr['VehicleYear'];
}
if($row_cnttt!=0){
$vehicle_year = $Arrr['VehicleYear'];
}
if($row_cnt!=0){
$short_name = $Ar['ShortName'];
}
if($row_cntt!=0){
$short_name = $Arr['ShortName'];
}
if($row_cnttt!=0){
$short_name = $Arrr['ShortName'];
}
if($row_cnt!=0){
$validity_date = $Ar['ValidityDate'];
}
if($row_cntt!=0){
$validity_date = $Arr['ValidityDate'];
}
if($row_cnttt!=0){
$validity_date = $Arrr['ValidityDate'];
}
if($row_cnt!=0){
$status = $Ar['Status'];
}
if($row_cntt!=0){
$status = $Arr['Status'];
}
if($row_cnttt!=0){
$status = $Arrr['Status'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FD</title>
	<meta charset="UTF-8">
	<meta name="description" content="Real estate HTML Template">
	<meta name="keywords" content="real estate, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900%7cRoboto:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

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

	<section class="hero-section set-bg" data-setbg="img/fon.jpg">
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
							<input type="text" class="input" name="number" placeholder="Введите номер автомобиля" value="<?php if(isset($_GET['number'])){ echo $_GET['number']; } ?>" required pattern="[АВЕКМНОРСТУХ]{1}\d{3}[АВЕКМНОРСТУХ]{2}\d{1,3}|[АВЕКМНОРСТУХ]{2}\d{5}">
							<button class="search-btn"><i class="fa fa-search"></i></button>
  						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

    <section class="intro-section spad">
		<div class="container">
		<?php if (isset($status) && $status=='	Действующее	'){
			echo '<div class="section-titleee">
				<h2>Статус разрешения: '.$status.'</h2>
			<h3>У данного водителя есть разрешение на осуществление деятельности по перевозке пассажиров и багажа легковым такси. Счастливого пути!</h3>
			</div>'; 
			}
			else if($row_cnt==0 && $row_cntt==0 && $row_cnttt==0){
				echo '<div class="section-titleee">
				<h4>Статус разрешения: Нет разрешения</h4>
			<h3>У данного водителя нет разрешения на осуществление деятельности по перевозке пассажиров и багажа легковым такси. Попробуте найти другого водителя. Будьте осторожны!</h3>
			</div>'; 
			}
			else{
				echo '<div class="section-titleee">
				<h4>Статус разрешения: '.$status.'</h4>
			<h3>У данного водителя нет разрешения на осуществление деятельности по перевозке пассажиров и багажа легковым такси. Попробуте найти другого водителя. Будьте осторожны!</h3>
			</div>'; 
			}
		?>
		<div class="section-titleee">
			<p>Государственный регистрационный знак: <?php echo $_GET['number'] ?>
			<p>Регистрационный номер разрешения: <?php if (isset($license_number)) echo $license_number ?>
			<p>ИНН: <?php if (isset($INN)) echo $INN ?>
			<p>ОГРН: <?php if (isset($OGRN)) echo $OGRN ?>
			<p>Серия и номер бланка разрешения: <?php if (isset($blank_number)) echo $blank_number ?>
			<p>Марка автомобиля: <?php if (isset($vehicle_brand)) echo $vehicle_brand ?>
			<p>Год выпуска автомобиля:  <?php if (isset($vehicle_year)) echo $vehicle_year ?>
			<p>Перевозчик (наименование ЮЛ или ИП): <?php if (isset($short_name)) echo $short_name ?>
			<p>Срок действия разрешения: <?php if (isset($validity_date)) echo $validity_date ?>
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
								<img src="img/logo1.png" alt="" height="150">
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
	<script src="js/main.js"></script>

</body>
</html>