<?php

    include ('conexion.php');
    include ('funciones.php');
        
        $tituloPagina = "Equipos";
        $keywords= "Panel de control de control de equipos";
        $description = "Panel de control de la app de Android";
    
    include ('header.php');   
    
    $equipos_liga_masculina = db_return_equipos_masculino();
    $equipos_liga_femenina = db_return_equipos_femenino();
    
?>

<!-- Contenido normal -->
<div id="article">
   
    <div id="equipos_liga_masculina">
    
        Equipo masculino:</br>  

        <ol>

             <?php while ( $equipos_masculino = mysql_fetch_array($equipos_liga_masculina) ) : ?>            

            <li><input type="text" name="nombre_equipo_masculino_<?php echo $equipos["ID"];?>" 
                         size="40" value= <?php echo $equipos_masculino["Nombre"];?>></li>

              <?php endwhile; ?>

        </ol>
    
    </div>
    
    <div id="equipos_liga_femenina">

       Equipo femenino:</br>  

       <ol>

            <?php while ( $equipos_femenino = mysql_fetch_array($equipos_liga_femenina) ) : ?>            

           <li><input type="text" name="nombre_equipo_femenino_<?php echo $equipos["ID"];?>" 
                        size="40" value= <?php echo $equipos_femenino["Nombre"];?>></li>

             <?php endwhile; ?>

       </ol>      

    </div>
    
</div>

<div class="clr"></div>

<button id="boton_guardar_nombres_equipos" type="button">Guardar</button>

<?php include ('footer.php'); ?>