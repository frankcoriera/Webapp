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
			<h3>Formulario de Registro de Clientes</h3>
                        <form action="guardar_datos_clientes.php" method="post" accept-charset="utf-8">
				<div class="form-group">
					<label for="nombre">Nombres *</label>
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" required>
				</div>
				
                            <div class="form-group">
					<label for="apellido">Apellidos *</label>
					<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required>
				</div>
                            
                            <div class="form-group">
					<label for="correo">Correo *</label>
					<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo electronico" required>
				</div>
                            
                            <div class="form-group">
					<label for="fecha_nacimiento">Fecha de nacimiento *</label>
					<input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="0000-00-00" required>
				</div>
                            
                            <div class="form-group">
					<label for="cedula">Cedula *</label>
                                        <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cedula" required>
				</div>
				
                            <div class="form-group">
					<label for="direccion">Direccion</label>
					<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
				</div>
                            
                            <div class="form-group">
					<label for="telefono">Telefono</label>
                                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
				</div>
                                                                              
                            <button type="submit" class="btn btn-default">Guardar</button>
			</form>
                        
                        
	</section>
	<?php
	include ("footer.php");
        
             
	?>
</body>
</html>
