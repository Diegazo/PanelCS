<?php

    include ('conexion.php');
    include ('funciones.php');
        
        $tituloPagina = "Clasificación";
        $keywords= "Panel de control de control de clasificación";
        $description = "Panel de control de la app de Android";
    
    include ('head.php');
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
			$('document').ready(function(){
				$('#boton_guardar_clasificacion').click(function(){
					                                                                             
					jQuery.post("procesar.php", {
						nombre_mas_1:$('#nombre_equipo_masculino_1').val(),
                                                pj_mas_1:$('#pj_equipo_masculino_1').val(),
                                                pg_mas_1:$('#pg_equipo_masculino_1').val(),
                                                pp_mas_1:$('#pp_equipo_masculino_1').val(),
                                                puntos_mas_1:$('#puntos_equipo_masculino_1').val(),
                                                nombre_mas_2:$('#nombre_equipo_masculino_2').val(),
                                                pj_mas_2:$('#pj_equipo_masculino_2').val(),
                                                pg_mas_2:$('#pg_equipo_masculino_2').val(),
                                                pp_mas_2:$('#pp_equipo_masculino_2').val(),
                                                puntos_mas_2:$('#puntos_equipo_masculino_2').val(),
                                                nombre_mas_3:$('#nombre_equipo_masculino_3').val(),
                                                pj_mas_3:$('#pj_equipo_masculino_3').val(),
                                                pg_mas_3:$('#pg_equipo_masculino_3').val(),
                                                pp_mas_3:$('#pp_equipo_masculino_3').val(),
                                                puntos_mas_3:$('#puntos_equipo_masculino_3').val(),
                                                nombre_mas_4:$('#nombre_equipo_masculino_4').val(),
                                                pj_mas_4:$('#pj_equipo_masculino_4').val(),
                                                pg_mas_4:$('#pg_equipo_masculino_4').val(),
                                                pp_mas_4:$('#pp_equipo_masculino_4').val(),
                                                puntos_mas_4:$('#puntos_equipo_masculino_4').val(),
                                                nombre_mas_5:$('#nombre_equipo_masculino_5').val(),
                                                pj_mas_5:$('#pj_equipo_masculino_5').val(),
                                                pg_mas_5:$('#pg_equipo_masculino_5').val(),
                                                pp_mas_5:$('#pp_equipo_masculino_5').val(),
                                                puntos_mas_5:$('#puntos_equipo_masculino_5').val(),
                                                nombre_mas_6:$('#nombre_equipo_masculino_6').val(),
                                                pj_mas_6:$('#pj_equipo_masculino_6').val(),
                                                pg_mas_6:$('#pg_equipo_masculino_6').val(),
                                                pp_mas_6:$('#pp_equipo_masculino_6').val(),
                                                puntos_mas_6:$('#puntos_equipo_masculino_6').val(),
                                                nombre_mas_7:$('#nombre_equipo_masculino_7').val(),
                                                pj_mas_7:$('#pj_equipo_masculino_7').val(),
                                                pg_mas_7:$('#pg_equipo_masculino_7').val(),
                                                pp_mas_7:$('#pp_equipo_masculino_7').val(),
                                                puntos_mas_7:$('#puntos_equipo_masculino_7').val(),
                                                nombre_mas_8:$('#nombre_equipo_masculino_8').val(),
                                                pj_mas_8:$('#pj_equipo_masculino_8').val(),
                                                pg_mas_8:$('#pg_equipo_masculino_8').val(),
                                                pp_mas_8:$('#pp_equipo_masculino_8').val(),
                                                puntos_mas_8:$('#puntos_equipo_masculino_8').val(),
                                                nombre_mas_9:$('#nombre_equipo_masculino_9').val(),
                                                pj_mas_9:$('#pj_equipo_masculino_9').val(),
                                                pg_mas_9:$('#pg_equipo_masculino_9').val(),
                                                pp_mas_9:$('#pp_equipo_masculino_9').val(),
                                                puntos_mas_9:$('#puntos_equipo_masculino_9').val(),
                                                nombre_mas_10:$('#nombre_equipo_masculino_10').val(),
                                                pj_mas_10:$('#pj_equipo_masculino_10').val(),
                                                pg_mas_10:$('#pg_equipo_masculino_10').val(),
                                                pp_mas_10:$('#pp_equipo_masculino_10').val(),
                                                puntos_mas_10:$('#puntos_equipo_masculino_10').val(),
                                                nombre_mas_11:$('#nombre_equipo_masculino_11').val(),
                                                pj_mas_11:$('#pj_equipo_masculino_11').val(),
                                                pg_mas_11:$('#pg_equipo_masculino_11').val(),
                                                pp_mas_11:$('#pp_equipo_masculino_11').val(),
                                                puntos_mas_11:$('#puntos_equipo_masculino_11').val(),
                                                nombre_mas_12:$('#nombre_equipo_masculino_12').val(),
                                                pj_mas_12:$('#pj_equipo_masculino_12').val(),
                                                pg_mas_12:$('#pg_equipo_masculino_12').val(),
                                                pp_mas_12:$('#pp_equipo_masculino_12').val(),
                                                puntos_mas_12:$('#puntos_equipo_masculino_12').val(),
                                                
                                                nombre_fem_1:$('#nombre_equipo_femenino_1').val(),
                                                pj_fem_1:$('#pj_equipo_femenino_1').val(),
                                                pg_fem_1:$('#pg_equipo_femenino_1').val(),
                                                pp_fem_1:$('#pp_equipo_femenino_1').val(),
                                                puntos_fem_1:$('#puntos_equipo_femenino_1').val(),
                                                nombre_fem_2:$('#nombre_equipo_femenino_2').val(),
                                                pj_fem_2:$('#pj_equipo_femenino_2').val(),
                                                pg_fem_2:$('#pg_equipo_femenino_2').val(),
                                                pp_fem_2:$('#pp_equipo_femenino_2').val(),
                                                puntos_fem_2:$('#puntos_equipo_femenino_2').val(),
                                                nombre_fem_3:$('#nombre_equipo_femenino_3').val(),
                                                pj_fem_3:$('#pj_equipo_femenino_3').val(),
                                                pg_fem_3:$('#pg_equipo_femenino_3').val(),
                                                pp_fem_3:$('#pp_equipo_femenino_3').val(),
                                                puntos_fem_3:$('#puntos_equipo_femenino_3').val(),
                                                nombre_fem_4:$('#nombre_equipo_femenino_4').val(),
                                                pj_fem_4:$('#pj_equipo_femenino_4').val(),
                                                pg_fem_4:$('#pg_equipo_femenino_4').val(),
                                                pp_fem_4:$('#pp_equipo_femenino_4').val(),
                                                puntos_fem_4:$('#puntos_equipo_femenino_4').val(),
                                                nombre_fem_5:$('#nombre_equipo_femenino_5').val(),
                                                pj_fem_5:$('#pj_equipo_femenino_5').val(),
                                                pg_fem_5:$('#pg_equipo_femenino_5').val(),
                                                pp_fem_5:$('#pp_equipo_femenino_5').val(),
                                                puntos_fem_5:$('#puntos_equipo_femenino_5').val(),
                                                nombre_fem_6:$('#nombre_equipo_femenino_6').val(),
                                                pj_fem_6:$('#pj_equipo_femenino_6').val(),
                                                pg_fem_6:$('#pg_equipo_femenino_6').val(),
                                                pp_fem_6:$('#pp_equipo_femenino_6').val(),
                                                puntos_fem_6:$('#puntos_equipo_femenino_6').val(),
                                                nombre_fem_7:$('#nombre_equipo_femenino_7').val(),
                                                pj_fem_7:$('#pj_equipo_femenino_7').val(),
                                                pg_fem_7:$('#pg_equipo_femenino_7').val(),
                                                pp_fem_7:$('#pp_equipo_femenino_7').val(),
                                                puntos_fem_7:$('#puntos_equipo_femenino_7').val(),
                                                nombre_fem_8:$('#nombre_equipo_femenino_8').val(),
                                                pj_fem_8:$('#pj_equipo_femenino_8').val(),
                                                pg_fem_8:$('#pg_equipo_femenino_8').val(),
                                                pp_fem_8:$('#pp_equipo_femenino_8').val(),
                                                puntos_fem_8:$('#puntos_equipo_femenino_8').val(),
                                                nombre_fem_9:$('#nombre_equipo_femenino_9').val(),
                                                pj_fem_9:$('#pj_equipo_femenino_9').val(),
                                                pg_fem_9:$('#pg_equipo_femenino_9').val(),
                                                pp_fem_9:$('#pp_equipo_femenino_9').val(),
                                                puntos_fem_9:$('#puntos_equipo_femenino_9').val(),
                                                nombre_fem_10:$('#nombre_equipo_femenino_10').val(),
                                                pj_fem_10:$('#pj_equipo_femenino_10').val(),
                                                pg_fem_10:$('#pg_equipo_femenino_10').val(),
                                                pp_fem_10:$('#pp_equipo_femenino_10').val(),
                                                puntos_fem_10:$('#puntos_equipo_femenino_10').val(),
                                                nombre_fem_11:$('#nombre_equipo_femenino_11').val(),
                                                pj_fem_11:$('#pj_equipo_femenino_11').val(),
                                                pg_fem_11:$('#pg_equipo_femenino_11').val(),
                                                pp_fem_11:$('#pp_equipo_femenino_11').val(),
                                                puntos_fem_11:$('#puntos_equipo_femenino_11').val(),
                                                nombre_fem_12:$('#nombre_equipo_femenino_12').val(),
                                                pj_fem_12:$('#pj_equipo_femenino_12').val(),
                                                pg_fem_12:$('#pg_equipo_femenino_12').val(),
                                                pp_fem_12:$('#pp_equipo_femenino_12').val(),
                                                puntos_fem_12:$('#puntos_equipo_femenino_12').val(),
                                                
                                                pagina:"clasificacion.php",
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
                                
                                $('#clasificacion_generar_xml').click(function(){  
                                    
                                        jQuery.post("procesar.php", {                         		                                                
                                                
                                                pagina:"xml",
                                                accion:"generar_clasificacion",
					}, function(data, textStatus){
						if(data == 1){
                                                        alert("XML actualizado");							
						}
						else{
							alert("ERROR mientras se creaba el XML");                                                        
						}
					});
                                });
			});
		</script>
    
<?php    
    include ('header.php');   
    
    $equipos_liga_masculina = db_return_equipos_masculino();
    $lista_equipos_masculino = array();
    while( $lista_equipos_masculino[] = mysql_fetch_array($equipos_liga_masculina));
    $total_equipos_masculino = count($lista_equipos_masculino);
    
    $equipos_liga_femenina = db_return_equipos_femenino();
    $lista_equipos_femenino = array();
    while( $lista_equipos_femenino[] = mysql_fetch_array($equipos_liga_femenina));
    $total_equipos_femenino = count($lista_equipos_femenino);
    
    $clasificacion_masculino = db_return_clasificacion_masculino();
    $lista_clasificacion_masculino = array();
    while( $lista_clasificacion_masculino[] = mysql_fetch_array($clasificacion_masculino));
    
    $clasificacion_femenino = db_return_clasificacion_femenino();
    $lista_clasificacion_femenino = array();
    while( $lista_clasificacion_femenino[] = mysql_fetch_array($clasificacion_femenino));    
    
    $contador_equipos_masculino = 1;
    $contador_equipos_femenino = 1;
    
    $contador_item_masculino = 1;
    $contador_item_femenino = 1;
    
    $maximo_equipos_masculino = db_maximo_equipos_masculino();
    $maximo_equipos_femenino = db_maximo_equipos_femenino();
    
?>

<!-- Contenido normal -->
<div id="article">
   
    <div id="clasificacion_liga_masculina">
    
        Clasificación liga masculina:</br>  
       
            <form id="form_clasificacion_masc">
                
                <table class="tabla_clasificacion">
                    
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Equipo</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PP</th>
                        <th scope="col">Ptos</th>
                    </tr>
                    
                    <?php while ( $contador_equipos_masculino <= $maximo_equipos_masculino["valor"] ) : ?> 
                        
                        <tr>
                            <td><?php echo $contador_equipos_masculino;?>.
                            </td>
                            <td>
                                <select id="nombre_equipo_masculino_<?php echo $contador_equipos_masculino;?>"> 
                                    <?php while ( $contador_item_masculino < $total_equipos_masculino ) : ?>  
                                           <option value="<?php echo $lista_equipos_masculino[$contador_item_masculino-1]["Nombre"];?>" 
                                           <?php if ($lista_equipos_masculino[$contador_item_masculino-1]["Nombre"] == $lista_clasificacion_masculino[$contador_equipos_masculino-1]["nombre"]) echo "selected"; ?>>     
                                                <?php echo $lista_equipos_masculino[$contador_item_masculino-1]["Nombre"];?>                                      
                                           </option>                                           
                                     <?php
                                         $contador_item_masculino++;
                                         endwhile;
                                         $contador_item_masculino = 1;
                                     ?>
                                </select>                            
                            </td>
                            <td>
                                <input type="text" id="pj_equipo_masculino_<?php echo $contador_equipos_masculino;?>" size="4"
                                       value="<?php echo $lista_clasificacion_masculino[$contador_equipos_masculino-1]["partidosJugados"]?>">
                            </td>
                            <td>
                                <input type="text" id="pg_equipo_masculino_<?php echo $contador_equipos_masculino;?>" size="4" 
                                value="<?php echo $lista_clasificacion_masculino[$contador_equipos_masculino-1]["partidosGanados"]?>">
                            </td>
                            <td>
                               <input type="text" id="pp_equipo_masculino_<?php echo $contador_equipos_masculino;?>" size="4" 
                               value="<?php echo $lista_clasificacion_masculino[$contador_equipos_masculino-1]["partidosPerdidos"]?>">
                            </td>
                            <td>
                                <input type="text" id="puntos_equipo_masculino_<?php echo $contador_equipos_masculino;?>" size="4" 
                                value="<?php echo $lista_clasificacion_masculino[$contador_equipos_masculino-1]["puntos"]?>">
                            </td>
                        </tr>

                        <?php $contador_equipos_masculino++;?>
                    <?php endwhile; ?>

                        <!-- Relleno para tener el tope de partidos previstos -->
                         <?php while ( $contador_equipos_masculino <= 12 ) : ?>         
                            <input hidden type="text" id="nombre_equipo_masculino_<?php echo $contador_equipos_masculino;?>" size="4" value="">
                            <input hidden type="text" id="pj_equipo_masculino_<?php echo $contador_equipos_masculino;?>" size="4" value="">
                            <input hidden type="text" id="pg_equipo_masculino_<?php echo $contador_equipos_masculino;?>" size="4" value="">
                            <input hidden type="text" id="pp_equipo_masculino_<?php echo $contador_equipos_masculino;?>" size="4" value="">
                            <input hidden type="text" id="puntos_equipo_masculino_<?php echo $contador_equipos_masculino;?>" size="4" value="">
                        <?php $contador_equipos_masculino++;?>
                        <?php endwhile; ?>
                    
                </table>
            </form>        
    
    </div>
    
    <div id="clasificacion_liga_femenina">

       Clasificación liga femenina:</br>  

            <form id="form_clasificacion_feme">
                
                <table class="tabla_clasificacion">
                    
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Equipo</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PP</th>
                        <th scope="col">Ptos</th>
                    </tr>
                    
                    <?php while ( $contador_equipos_femenino <= $maximo_equipos_femenino["valor"] ) : ?> 
                        
                        <tr>
                            <td><?php echo $contador_equipos_femenino;?>.
                            </td>
                            <td>
                                <select id="nombre_equipo_femenino_<?php echo $contador_equipos_femenino;?>"> 
                                    <?php while ( $contador_item_femenino < $total_equipos_femenino ) : ?>  
                                           <option value="<?php echo $lista_equipos_femenino[$contador_item_femenino-1]["Nombre"];?>" 
                                           <?php if ($lista_equipos_femenino[$contador_item_femenino-1]["Nombre"] == $lista_clasificacion_femenino[$contador_equipos_femenino-1]["nombre"]) echo "selected"; ?>>     
                                                <?php echo $lista_equipos_femenino[$contador_item_femenino-1]["Nombre"];?>                                      
                                           </option>
                                     <?php
                                         $contador_item_femenino++;
                                         endwhile;
                                         $contador_item_femenino = 1;
                                     ?>
                                </select>                            
                            </td>
                            <td>
                                <input type="text" id="pj_equipo_femenino_<?php echo $contador_equipos_femenino;?>" size="4"
                                       value="<?php echo $lista_clasificacion_femenino[$contador_equipos_femenino-1]["partidosJugados"]?>">
                            </td>
                            <td>
                                <input type="text" id="pg_equipo_femenino_<?php echo $contador_equipos_femenino;?>" size="4" 
                                value="<?php echo $lista_clasificacion_femenino[$contador_equipos_femenino-1]["partidosGanados"]?>">
                            </td>
                            <td>
                               <input type="text" id="pp_equipo_femenino_<?php echo $contador_equipos_femenino;?>" size="4" 
                               value="<?php echo $lista_clasificacion_femenino[$contador_equipos_femenino-1]["partidosPerdidos"]?>">
                            </td>
                            <td>
                                <input type="text" id="puntos_equipo_femenino_<?php echo $contador_equipos_femenino;?>" size="4" 
                                value="<?php echo $lista_clasificacion_femenino[$contador_equipos_femenino-1]["puntos"]?>">
                            </td>
                        </tr>

                        <?php $contador_equipos_femenino++;?>
                    <?php endwhile; ?>

                        <!-- Relleno para tener el tope de partidos previstos -->
                         <?php while ( $contador_equipos_femenino <= 12 ) : ?>                     
                            <input hidden type="text" id="nombre_equipo_femenino_<?php echo $contador_equipos_femenino;?>" size="4" value="">
                            <input hidden type="text" id="pj_equipo_femenino_<?php echo $contador_equipos_femenino;?>" size="4" value="">
                            <input hidden type="text" id="pg_equipo_femenino_<?php echo $contador_equipos_femenino;?>" size="4" value="">
                            <input hidden type="text" id="pp_equipo_femenino_<?php echo $contador_equipos_femenino;?>" size="4" value="">
                            <input hidden type="text" id="puntos_equipo_femenino_<?php echo $contador_equipos_femenino;?>" size="4" value="">
                        <?php $contador_equipos_femenino++;?>
                        <?php endwhile; ?>
                    
                </table>
            </form>  

    </div>
    
</div>

<div class="clr"></div>

<button id="boton_guardar_clasificacion" type="button">Guardar</button>
<button id="clasificacion_ver_xml_mas" type="button" onclick="window.open('http://castraservilia.com/android/xml/clasificacionMasculino.xml')" target="_blank">Ver el xml masculino</button>
<button id="clasificacion_ver_xml_fem" type="button" onclick="window.open('http://castraservilia.com/android/xml/clasificacionFemenino.xml')" target="_blank">Ver el xml femenino</button>
<button id="clasificacion_generar_xml" type="button">Generar el xml</button>

<?php include ('footer.php'); ?>