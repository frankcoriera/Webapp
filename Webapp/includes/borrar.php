<?php
include("../dll/config.php");
include("../dll/mysql.php");

extract($_POST);

$result = mysqli_query($link, "delete from registroClientes where cedula=$eliminar") 
        or die('Consulta fallida: ' . mysql_error());

echo '<script>alert("Datos eliminados..")</script>';
echo "<script>location.href='http://127.0.0.1/webbapp/includes/adm Eliminar.php'</script>";
?>
