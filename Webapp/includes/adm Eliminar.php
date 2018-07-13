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
         <form action="borrar.php" method="post" accept-charset="utf-8">
		<?php
                
		
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
                        //echo "<td><a href='diagnostico.php?id=$line[0]' class='diagnostico'><span class='icon-bug'></span></a></td>";
		        //echo "<td><a href='actualizar.php?id=$line[0]' class='actualizar'><span class='icon-pencil'></span></a></td>";
		        //echo "<td><a href='borrar.php?id=$line[0]' class='borrar'><span class='icon-trashcan'></span></a></td>";
		    echo "</tr>";
		}
		echo "</table>";
                
                ?>
        <div class="form-group">
            <label for="eliminar">Ingresa la Cedula del registro a ELIMINAR</label>
            <input type="number" class="form-control" id="eliminar" name="eliminar" placeholder="Eliminar">
	</div>
        <button type="submit" class="btn btn-default">Eliminar</button>
	</form>
        </section>
	<?php
	include ("footer.php");
	?>
</body>
</html>