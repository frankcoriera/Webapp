<?php
include("../dll/config.php");
include("../dll/mysql.php");


extract($_POST);
		$query = "SELECT `usuario`, `contraseña` FROM `usuarioscontraseñas`";
		$result = mysqli_query($link, $query) or die('Consulta fallida: ' . mysql_error());
                echo "<table class='table'>";
		echo "<tr>";
			echo "<td><strong>USUARIO</strong></td>";
			echo "<td><strong>CONTRASEÑA</strong></td>";
		echo "</tr>";
		while ($line = mysqli_fetch_row($result)){ 
		    echo "<tr>";
		        echo "<td>$line[0]</td>";
                        $user = $line[0];
		        echo "<td>$line[1]</td>";
                        $pass = $line[1];
		        echo "</tr>";
		}
		echo "</table>";
                
                ?>
