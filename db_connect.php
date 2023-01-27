<?php
$db_host = 'localhost';
$db_user = 'root'; 
$db_password = ''; 
$database = 'kur_pr'; 
$mysql = mysqli_connect($db_host, $db_user, $db_password);
mysqli_select_db($mysql, $database) or die("Cannot connect DB");
?>