<?php

    include ('conexion.php');
    include ('funciones.php');
        
        $tituloPagina = "Jornada";
        $keywords= "Panel de control de control de jornada";
        $description = "Panel de control de la app de Android";
    
    include ('head.php');
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
			$('document').ready(function(){
				$('#boton_guardar_nombres_equipos').click(function(){
					
                                       var nombre_m_l_1 = $('#nombre_equipo_masculino_local_1').val();
                                       var nombre_m_l_2 = $('#nombre_equipo_masculino_local_2').val();
                                       var nombre_m_l_3 = $('#nombre_equipo_masculino_local_3').val();
                                       var nombre_m_l_4 = $('#nombre_equipo_masculino_local_4').val();
                                       var nombre_m_l_5 = $('#nombre_equipo_masculino_local_5').val();
                                       var nombre_m_l_6 = $('#nombre_equipo_masculino_local_6').val();
                                       var nombre_m_l_7 = $('#nombre_equipo_masculino_local_7').val();
                                       var nombre_m_l_8 = $('#nombre_equipo_masculino_local_8').val();
                                       var nombre_m_l_9 = $('#nombre_equipo_masculino_local_9').val();
                                       var nombre_m_l_10 = $('#nombre_equipo_masculino_local_10').val();
                                       var nombre_m_l_11 = $('#nombre_equipo_masculino_local_11').val();
                                       var nombre_m_l_12 = $('#nombre_equipo_masculino_local_12').val();
                                       
                                       var nombre_m_v_1 = $('#nombre_equipo_masculino_visitante_1').val();
                                       var nombre_m_v_2 = $('#nombre_equipo_masculino_visitante_2').val();
                                       var nombre_m_v_3 = $('#nombre_equipo_masculino_visitante_3').val();
                                       var nombre_m_v_4 = $('#nombre_equipo_masculino_visitante_4').val();
                                       var nombre_m_v_5 = $('#nombre_equipo_masculino_visitante_5').val();
                                       var nombre_m_v_6 = $('#nombre_equipo_masculino_visitante_6').val();
                                       var nombre_m_v_7 = $('#nombre_equipo_masculino_visitante_7').val();
                                       var nombre_m_v_8 = $('#nombre_equipo_masculino_visitante_8').val();
                                       var nombre_m_v_9 = $('#nombre_equipo_masculino_visitante_9').val();
                                       var nombre_m_v_10 = $('#nombre_equipo_masculino_visitante_10').val();
                                       var nombre_m_v_11 = $('#nombre_equipo_masculino_visitante_11').val();
                                       var nombre_m_v_12 = $('#nombre_equipo_masculino_visitante_12').val();
                                       
                                       var nombre_f_l_1 = $('#nombre_equipo_femenino_local_1').val();
                                       var nombre_f_l_2 = $('#nombre_equipo_femenino_local_2').val();
                                       var nombre_f_l_3 = $('#nombre_equipo_femenino_local_3').val();
                                       var nombre_f_l_4 = $('#nombre_equipo_femenino_local_4').val();
                                       var nombre_f_l_5 = $('#nombre_equipo_femenino_local_5').val();
                                       var nombre_f_l_6 = $('#nombre_equipo_femenino_local_6').val();
                                       var nombre_f_l_7 = $('#nombre_equipo_femenino_local_7').val();
                                       var nombre_f_l_8 = $('#nombre_equipo_femenino_local_8').val();
                                       var nombre_f_l_9 = $('#nombre_equipo_femenino_local_9').val();
                                       var nombre_f_l_10 = $('#nombre_equipo_femenino_local_10').val();
                                       var nombre_f_l_11 = $('#nombre_equipo_femenino_local_11').val();                                       
                                       
                                       var nombre_f_v_1 = $('#nombre_equipo_femenino_visitante_1').val();
                                       var nombre_f_v_2 = $('#nombre_equipo_femenino_visitante_2').val();
                                       var nombre_f_v_3 = $('#nombre_equipo_femenino_visitante_3').val();
                                       var nombre_f_v_4 = $('#nombre_equipo_femenino_visitante_4').val();
                                       var nombre_f_v_5 = $('#nombre_equipo_femenino_visitante_5').val();
                                       var nombre_f_v_6 = $('#nombre_equipo_femenino_visitante_6').val();
                                       var nombre_f_v_7 = $('#nombre_equipo_femenino_visitante_7').val();
                                       var nombre_f_v_8 = $('#nombre_equipo_femenino_visitante_8').val();
                                       var nombre_f_v_9 = $('#nombre_equipo_femenino_visitante_9').val();
                                       var nombre_f_v_10 = $('#nombre_equipo_femenino_visitante_10').val();
                                       var nombre_f_v_11 = $('#nombre_equipo_femenino_visitante_11').val();
                                       
                                                                             
					jQuery.post("procesar.php", {
						nombreml1:nombre_m_l_1,						
                                                nombreml2:nombre_m_l_2,						
                                                nombreml3:nombre_m_l_3,						
                                                nombreml4:nombre_m_l_4,						
                                                nombreml5:nombre_m_l_5,						
                                                nombreml6:nombre_m_l_6,						
                                                nombreml7:nombre_m_l_7,						
                                                nombreml8:nombre_m_l_8,						
                                                nombreml9:nombre_m_l_9,						
                                                nombreml10:nombre_m_l_10,						
                                                nombreml11:nombre_m_l_11,						
                                                nombreml12:nombre_m_l_12,
                                                nombremv1:nombre_m_v_1,						
                                                nombremv2:nombre_m_v_2,						
                                                nombremv3:nombre_m_v_3,						
                                                nombremv4:nombre_m_v_4,						
                                                nombremv5:nombre_m_v_5,						
                                                nombremv6:nombre_m_v_6,						
                                                nombremv7:nombre_m_v_7,						
                                                nombremv8:nombre_m_v_8,						
                                                nombremv9:nombre_m_v_9,						
                                                nombremv10:nombre_m_v_10,						
                                                nombremv11:nombre_m_v_11,						
                                                nombremv12:nombre_m_v_12,
                                                nombrefl1:nombre_f_l_1,						
                                                nombrefl2:nombre_f_l_2,						
                                                nombrefl3:nombre_f_l_3,						
                                                nombrefl4:nombre_f_l_4,						
                                                nombrefl5:nombre_f_l_5,						
                                                nombrefl6:nombre_f_l_6,						
                                                nombrefl7:nombre_f_l_7,						
                                                nombrefl8:nombre_f_l_8,						
                                                nombrefl9:nombre_f_l_9,						
                                                nombrefl10:nombre_f_l_10,						
                                                nombrefl11:nombre_f_l_11,
                                                nombrefv1:nombre_f_v_1,						
                                                nombrefv2:nombre_f_v_2,						
                                                nombrefv3:nombre_f_v_3,						
                                                nombrefv4:nombre_f_v_4,						
                                                nombrefv5:nombre_f_v_5,						
                                                nombrefv6:nombre_f_v_6,						
                                                nombrefv7:nombre_f_v_7,						
                                                nombrefv8:nombre_f_v_8,						
                                                nombrefv9:nombre_f_v_9,						
                                                nombrefv10:nombre_f_v_10,						
                                                nombrefv11:nombre_f_v_11,		
                                                pagina:"jornada.php",
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
                                
                                $('#jornada_generar_xml').click(function(){  
                                    
                                        jQuery.post("procesar.php", {                         		                                                
                                                
                                                pagina:"xml",
                                                accion:"generar_jornada_completa",
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
    
    $jornada_completa_masculino = db_return_proxima_jornada_completa_masculino();
    $lista_jornada_completa_masculino = array();
    while( $lista_jornada_completa_masculino[] = mysql_fetch_array($jornada_completa_masculino));
    
    $jornada_completa_femenino = db_return_proxima_jornada_completa_femenino();
    $lista_jornada_completa_femenino = array();
    while( $lista_jornada_completa_femenino[] = mysql_fetch_array($jornada_completa_femenino));
    
    $contador_partidos_masculino = 1;
    $contador_equipos_masculino = 1;
    
    $contador_partidos_femenino = 1;
    $contador_equipos_femenino = 1;
    
    $maximo_partidos_masculino = db_maximo_partidos_jornada_masculino();
    $maximo_partidos_femenino = db_maximo_partidos_jornada_femenino();
    
?>

<!-- Contenido normal -->
<div id="article">
   
    <div id="equipos_liga_masculina">
    
        Jornada masculino:</br>  

        <ol>
            <form id="form_equipos_masc">
                
                <?php while ( $contador_partidos_masculino <= $maximo_partidos_masculino["valor"] ) : ?> 

                    
                    <li><select id="nombre_equipo_masculino_local_<?php echo $contador_partidos_masculino;?>"> 
                           <?php while ( $contador_equipos_masculino < $total_equipos_masculino ) : ?>  
                                  <option value="<?php echo $lista_equipos_masculino[$contador_equipos_masculino-1]["Nombre"];?>" 
                                       <?php if ($lista_jornada_completa_masculino[$contador_partidos_masculino-1]["local"] == $lista_equipos_masculino[$contador_equipos_masculino-1]["Nombre"]) echo "selected"; ?>>
                                       <?php echo $lista_equipos_masculino[$contador_equipos_masculino-1]["Nombre"];?>                                      
                                  </option>
                            <?php
                                $contador_equipos_masculino++;
                                endwhile;
                                $contador_equipos_masculino = 1;
                            ?>
                        </select>
                        - 
                        <select id="nombre_equipo_masculino_visitante_<?php echo $contador_partidos_masculino;?>"> 
                           <?php while ( $contador_equipos_masculino < $total_equipos_masculino ) : ?>  
                                  <option value="<?php echo $lista_equipos_masculino[$contador_equipos_masculino-1]["Nombre"];?>" 
                                       <?php if ($lista_jornada_completa_masculino[$contador_partidos_masculino-1]["visitante"] == $lista_equipos_masculino[$contador_equipos_masculino-1]["Nombre"]) echo "selected"; ?>>
                                       <?php echo $lista_equipos_masculino[$contador_equipos_masculino-1]["Nombre"];?>                                      
                                  </option>
                            <?php
                                $contador_equipos_masculino++;
                                endwhile;
                                $contador_equipos_masculino = 1;
                            ?>
                        </select>
                    </li>
                    
                    <?php $contador_partidos_masculino++;?>
                <?php endwhile; ?>
                
                    <!-- Relleno para tener el tope de partidos previstos -->
                     <?php while ( $contador_partidos_masculino <= 12 ) : ?>                     
                        <select hidden id="nombre_equipo_masculino_local_<?php echo $contador_partidos_masculino;?>">                            
                        </select>                        
                        <select hidden id="nombre_equipo_masculino_visitante_<?php echo $contador_partidos_masculino;?>">                            
                        </select>  
                    <?php $contador_partidos_masculino++;?>
                    <?php endwhile; ?>
                    
                
            </form>
        </ol>
    
    </div>
    
    <div id="equipos_liga_femenina">

       Jornada femenino:</br>  

       <ol>

            <form id="form_equipos_feme">

                <?php while ( $contador_partidos_femenino <= $maximo_partidos_femenino["valor"] ) : ?>            

                    <li><select id="nombre_equipo_femenino_local_<?php echo $contador_partidos_femenino;?>"> 
                           <?php while ( $contador_equipos_femenino < $total_equipos_femenino ) : ?>  
                                   <option value="<?php echo $lista_equipos_femenino[$contador_equipos_femenino-1]["Nombre"];?>" 
                                       <?php if ($lista_jornada_completa_femenino[$contador_partidos_femenino-1]["local"] == $lista_equipos_femenino[$contador_equipos_femenino-1]["Nombre"]) echo "selected"; ?>>
                                       <?php echo $lista_equipos_femenino[$contador_equipos_femenino-1]["Nombre"];?>                                      
                                  </option>
                            <?php
                                $contador_equipos_femenino++;
                                endwhile;
                                $contador_equipos_femenino = 1;
                            ?>
                        </select>
                        - 
                        <select id="nombre_equipo_femenino_visitante_<?php echo $contador_partidos_femenino;?>"> 
                           <?php while ( $contador_equipos_femenino < $total_equipos_femenino ) : ?>  
                                  <option value="<?php echo $lista_equipos_femenino[$contador_equipos_femenino-1]["Nombre"];?>" 
                                       <?php if ($lista_jornada_completa_femenino[$contador_partidos_femenino-1]["visitante"] == $lista_equipos_femenino[$contador_equipos_femenino-1]["Nombre"]) echo "selected"; ?>>
                                       <?php echo $lista_equipos_femenino[$contador_equipos_femenino-1]["Nombre"];?>                                      
                                  </option>
                            <?php
                                $contador_equipos_femenino++;
                                endwhile;
                                $contador_equipos_femenino = 1;
                            ?>
                        </select>
                    </li>
                    
                    <?php $contador_partidos_femenino++;?>
                <?php endwhile; ?>
                <!-- Relleno para tener el tope de partidos previstos -->
                     <?php while ( $contador_partidos_femenino <= 13 ) : ?>                     
                        <select hidden id="nombre_equipo_femenino_local_<?php echo $contador_partidos_femenino;?>">                            
                        </select>                        
                        <select hidden id="nombre_equipo_femenino_visitante_<?php echo $contador_partidos_femenino;?>">                            
                        </select>  
                    <?php $contador_partidos_femenino++;?>
                    <?php endwhile; ?>    
                    
            </form>

       </ol>      

    </div>
    
</div>

<div class="clr"></div>

<button id="boton_guardar_nombres_equipos" type="button">Guardar</button>
<button id="jornada_ver_xml_mas" type="button" onclick="window.open('http://castraservilia.com/android/xml/jornadaCompletaMasculino.xml')" target="_blank">Ver el xml masculino</button>
<button id="jornada_ver_xml_fem" type="button" onclick="window.open('http://castraservilia.com/android/xml/jornadaCompletaFemenino.xml')" target="_blank">Ver el xml femenino</button>
<button id="jornada_generar_xml" type="button">Generar el xml</button>

<?php include ('footer.php'); ?>