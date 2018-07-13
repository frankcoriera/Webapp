<?php
include("../dll/config.php");
include("../dll/mysql.php");
//include("index.php");
extract($_POST);


$query  = "INSERT INTO `webapp`.`registroClientes` VALUES ('$nombre', '$apellido', '$correo', '$fecha_nacimiento', '$cedula', '$direccion', '$telefono')";
mysqli_query($link, $query)
       or die('Consulta fallida: ' . mysql_error());


echo '<script>alert("datos guardados..")</script>';
echo "<script>location ='http://127.0.0.1/webbapp/includes/adm Insertar.php";
?>
