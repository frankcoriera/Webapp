<?php
include("../dll/config.php");
include("../dll/mysql.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" href="<?=$url_site?>css/estilos.css">
	<link rel="stylesheet" href="<?=$url_site?>img/style.css">
</head>
<body>
	<?php
	include ("header_menu.php");
	?>
	<section id="contenedor">
	<h3><span class="icon-user"></span>Lista de Clientes</h3>
		<?php
               
		extract($_POST);
		$result = mysqli_query($link, "select * from registroClientes") 
                        or die('Consulta fallida: ' . mysql_error());
		echo "<table class='table'>";
		echo "<tr>";
			echo "<td><strong>NOMBRE</strong></td>";
			echo "<td><strong>APELLIDO</strong></td>";
			echo "<td><strong>CORREO</strong></td>";
                        echo "<td><strong>FECHA_NACIMIENTO</strong></td>";
                        echo "<td><strong>CEDULA</strong></td>";
			echo "<td><strong>DIRECCION</strong></td>";
			echo "<td><strong>TELEFONO</strong></td>";
		echo "</tr>";
		while ($line = mysqli_fetch_row($result)){ 
		    echo "<tr>";
		        echo "<td>$line[0]</td>";
		        echo "<td>$line[1]</td>";
		        echo "<td>$line[2]</td>";
		        echo "<td>$line[3]</td>";
		        echo "<td>$line[4]</td>";
		        echo "<td>$line[5]</td>";
		        echo "<td>$line[6]</td>";
                        
		    echo "</tr>";
		}
		echo "</table>";
                
                ?>
	</section>
	<?php
	include ("footer.php");
	?>
</body>
</html>