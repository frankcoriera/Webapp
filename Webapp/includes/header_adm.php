
<header id="header" class="">
	<h1><?php echo $adm; ?></h1>
        <nav>
            <input type="button" onclick="Estaciones();" name="Estaciones" class="btn-default" value="Estaciones"</a>
            <input type="button" onclick="Bicicletas();" name="Estaciones" class="btn-default" value="Bicicletas"</a>
            <input type="button" onclick="Reportes();" name="Estaciones" class="btn-default" value="Reportes"</a>
       <script >  
            function Estaciones(){
            <?php
            include ("includes/adm Insertar.php");
            ?>
                      
            }
            
            function Eliminar(){
            window.location="adm Ingresar Eliminar.php";
                      
            }
            function Modificar(){
            window.location="adm modificar.php";
            
                      
            }
            </script>
            <?php
	include ("includes/footer.php");   
	?>
            
        </nav>
        
        
</header><!-- /header -->