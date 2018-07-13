<?php
include("config.php");
$link = mysqli_connect($db_host,$db_usr,$db_pass)
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
//mysqli_select_db($db_name) or die('No se pudo seleccionar la base de datos');
//mysqli_select_db($link,'webapp')
mysqli_select_db($link,$db_name)
    or die('No se pudo seleccionar la base de datos');
echo 'Selected successfully';
?>