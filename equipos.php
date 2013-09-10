<?php

    include ('conexion.php');
    include ('funciones.php');
        
        $tituloPagina = "Equipos";
        $keywords= "Panel de control de control de equipos";
        $description = "Panel de control de la app de Android";
    
    include ('head.php');
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
			$('document').ready(function(){
				$('#boton_guardar_nombres_equipos').click(function(){
					
                                       var nombre_m_1 = $('#nombre_equipo_masculino_1').val();
                                       var nombre_m_2 = $('#nombre_equipo_masculino_2').val();
                                       var nombre_m_3 = $('#nombre_equipo_masculino_3').val();
                                       var nombre_m_4 = $('#nombre_equipo_masculino_4').val();
                                       var nombre_m_5 = $('#nombre_equipo_masculino_5').val();
                                       var nombre_m_6 = $('#nombre_equipo_masculino_6').val();
                                       var nombre_m_7 = $('#nombre_equipo_masculino_7').val();
                                       var nombre_m_8 = $('#nombre_equipo_masculino_8').val();
                                       var nombre_m_9 = $('#nombre_equipo_masculino_9').val();
                                       var nombre_m_10 = $('#nombre_equipo_masculino_10').val();
                                       var nombre_m_11 = $('#nombre_equipo_masculino_11').val();
                                       var nombre_m_12 = $('#nombre_equipo_masculino_12').val();
                                       
                                       var nombre_f_1 = $('#nombre_equipo_femenino_1').val();
                                       var nombre_f_2 = $('#nombre_equipo_femenino_2').val();
                                       var nombre_f_3 = $('#nombre_equipo_femenino_3').val();
                                       var nombre_f_4 = $('#nombre_equipo_femenino_4').val();
                                       var nombre_f_5 = $('#nombre_equipo_femenino_5').val();
                                       var nombre_f_6 = $('#nombre_equipo_femenino_6').val();
                                       var nombre_f_7 = $('#nombre_equipo_femenino_7').val();
                                       var nombre_f_8 = $('#nombre_equipo_femenino_8').val();
                                       var nombre_f_9 = $('#nombre_equipo_femenino_9').val();
                                       var nombre_f_10 = $('#nombre_equipo_femenino_10').val();
                                       var nombre_f_11 = $('#nombre_equipo_femenino_11').val();
                                       var nombre_f_12 = $('#nombre_equipo_femenino_12').val();
                                       var nombre_f_13 = $('#nombre_equipo_femenino_13').val();
                                       var nombre_f_14 = $('#nombre_equipo_femenino_14').val();
                                                                             
					jQuery.post("procesar.php", {
						nombrem1:nombre_m_1,						
                                                nombrem2:nombre_m_2,						
                                                nombrem3:nombre_m_3,						
                                                nombrem4:nombre_m_4,						
                                                nombrem5:nombre_m_5,						
                                                nombrem6:nombre_m_6,						
                                                nombrem7:nombre_m_7,						
                                                nombrem8:nombre_m_8,						
                                                nombrem9:nombre_m_9,						
                                                nombrem10:nombre_m_10,						
                                                nombrem11:nombre_m_11,						
                                                nombrem12:nombre_m_12,
                                                nombref1:nombre_f_1,						
                                                nombref2:nombre_f_2,						
                                                nombref3:nombre_f_3,						
                                                nombref4:nombre_f_4,						
                                                nombref5:nombre_f_5,						
                                                nombref6:nombre_f_6,						
                                                nombref7:nombre_f_7,						
                                                nombref8:nombre_f_8,						
                                                nombref9:nombre_f_9,						
                                                nombref10:nombre_f_10,						
                                                nombref11:nombre_f_11,						
                                                nombref12:nombre_f_12,
                                                nombref13:nombre_f_13,						
                                                nombref14:nombre_f_14,
                                                pagina:"equipos.php",
					}, function(data, textStatus){
						if(data == 1){
                                                        alert("Inserción correcta");
							location.reload();
						}
						else{
							alert("Error durante la inserción");
						}
					});
				});
			});
		</script>
    
<?php    
    include ('header.php');   
    
    $equipos_liga_masculina = db_return_equipos_masculino();
    $equipos_liga_femenina = db_return_equipos_femenino();
    
?>

<!-- Contenido normal -->
<div id="article">
   
    <div id="equipos_liga_masculina">
    
        Equipo masculino:</br>  

        <ol>
            <form id="form_equipos_masc">

             <?php while ( $equipos_masculino = mysql_fetch_array($equipos_liga_masculina) ) : ?>            

            <li><input type="text" id="nombre_equipo_masculino_<?php echo $equipos_masculino["ID"];?>" 
                         size="40" value= "<?php echo $equipos_masculino["Nombre"];?>"></li>

              <?php endwhile; ?>
            </form>
        </ol>
    
    </div>
    
    <div id="equipos_liga_femenina">

       Equipo femenino:</br>  

       <ol>

            <?php while ( $equipos_femenino = mysql_fetch_array($equipos_liga_femenina) ) : ?>            

           <li><input type="text" id="nombre_equipo_femenino_<?php echo $equipos_femenino["ID"];?>" 
                        size="40" value= "<?php echo $equipos_femenino["Nombre"];?>"></li>

             <?php endwhile; ?>

       </ol>      

    </div>
    
</div>

<div class="clr"></div>

<button id="boton_guardar_nombres_equipos" type="button">Guardar</button>

<?php include ('footer.php'); ?>