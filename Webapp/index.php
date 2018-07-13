<?php
include ("dll/config.php");
include ("dll/mysql.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" href="<?=$url_site?>css/estilos.css">
</head>
<body>
        <?php
	include ("includes/header_index.php");
	?>
	<section id="contenedor">
			<h3>Sistema para la prestación de Bicicletas</h3>
                        <form accept-charset="utf-8">
				<div class="form-group">
					<label for="usuario">Usuario*</label>
                                        <input type="text" class="form-control" id="usuario" name="usuario"  placeholder="" >
				</div>
				
                            <div class="form-group">
					<label for="contraseña">Cotraseña*</label>
                                        <input type="password" class="form-control" id="contraseña" name="contraseña"  placeholder="" >
				</div>
                            <button type="button" onclick="login();" class="btn btn-default">INGRESAR</button>
                            
			</form>
                        <!--datos para login cliente: usuario:cliente contraseña:cliente -->
                        <script >
                        function login(){
                        var txtusuario = document.getElementById("usuario").value;
                        var txtpassword = document.getElementById("contraseña").value;
                        if ((txtusuario === "cliente")&&(txtpassword === "cliente")){
                        alert("correcto");
                        window.location="adm Estaciones.php";
                        }
                        else{
                        alert("error");
                        }
                        
                        }
                        </script>
                        
	</section>
	<?php
	include ("includes/footer.php");
        
             
	?>
</body>
</html>
