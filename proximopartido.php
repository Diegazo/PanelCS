<?php

    include ('conexion.php');
    include ('funciones.php');
        
        $tituloPagina = "Próximo partido";
        $keywords= "Panel de control de control de próximo partido";
        $description = "Panel de control de la app de Android";
    
    include ('head.php');
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
			$('document').ready(function(){
				$('#boton_guardar_proximo_partido').click(function(){
					
                                       var tipo_m = $('#pp_tipo_masculino').val();
                                       var jornada_m = $('#pp_jornada_masculino').val();
                                       var local_m = $('#pp_local_masculino').val();
                                       var visitante_m = $('#pp_visitante_masculino').val();
                                       var lugar_m = $('#pp_lugar_masculino').val();
                                       var fecha_m = $('#pp_fecha_masculino').val();
                                       var hora_m = $('#pp_hora_masculino').val();
                                                                              
                                       var tipo_f = $('#pp_tipo_femenino').val();
                                       var jornada_f = $('#pp_jornada_femenino').val();
                                       var local_f = $('#pp_local_femenino').val();
                                       var visitante_f = $('#pp_visitante_femenino').val();
                                       var lugar_f = $('#pp_lugar_femenino').val();
                                       var fecha_f = $('#pp_fecha_femenino').val();
                                       var hora_f = $('#pp_hora_femenino').val();
                                                                             
					jQuery.post("procesar.php", {
						tipo_m:tipo_m,						
                                                jornada_m:jornada_m,						
                                                local_m:local_m,						
                                                visitante_m:visitante_m,						
                                                lugar_m:lugar_m,						
                                                fecha_m:fecha_m,						
                                                hora_m:hora_m,
                                                tipo_f:tipo_f,						
                                                jornada_f:jornada_f,						
                                                local_f:local_f,						
                                                visitante_f:visitante_f,						
                                                lugar_f:lugar_f,						
                                                fecha_f:fecha_f,						
                                                hora_f:hora_f,					                                                
                                                pagina:"proximopartido.php",
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
                                
                                $('#pp_generar_xml').click(function(){  
                                    
                                        jQuery.post("procesar.php", {                         		                                                
                                                
                                                pagina:"xml",
                                                accion:"generar_proximo_partido",
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
    
    $proximo_partido_masculino = db_return_proximo_partido_masculino();
    $proximo_partido_femenino = db_return_proximo_partido_femenino();
    
?>

<!-- Contenido normal -->
<div id="article">
   
    <div id="proximo_partido_masculino">
    
        Equipo masculino:</br>  

       
            <form id="form_equipos_masc">
                
                <table class="tabla_proximo_partido">
                    <tr>
                        <td><label>Tipo</label></td>      
                        <td>
                            <select id="pp_tipo_masculino">
                                <option value="no" <?php if ($proximo_partido_masculino["tipo"] == "no") echo "selected"; ?>>Descanso veraniego</option>
                                <option value="amistoso" <?php if ($proximo_partido_masculino["tipo"] == "amistoso") echo "selected"; ?>>Amistoso</option>
                                <option value="pretemporada" <?php if ($proximo_partido_masculino["tipo"] == "pretemporada") echo "selected"; ?>>Pretemporada</option>
                                <option value="temporada" <?php if ($proximo_partido_masculino["tipo"] == "temporada") echo "selected"; ?>>Temporada</option>
                                <option value="playoff" <?php if ($proximo_partido_masculino["tipo"] == "playoff") echo "selected"; ?>>Playoff</option>
                            </select>               
                        </td>                    
                    </tr>            
                    </tr>
                    
                    <tr>
                        <td><label>Jornada</label></td>
                        <td><input type="text" id="pp_jornada_masculino" size="30" value= "<?php echo $proximo_partido_masculino["numeroJornada"];?>"></td>
                    </tr>       
                     
                    <tr>
                        <td><label>Local</label></td>      
                        <td><input type="text" id="pp_local_masculino" size="30" value= "<?php echo $proximo_partido_masculino["equipoLocal"];?>"></td>
                    </tr>       
                 
                    <tr>
                        <td><label>Visitante</label></td>      
                        <td><input type="text" id="pp_visitante_masculino" size="30" value= "<?php echo $proximo_partido_masculino["equipoVisitante"];?>"></td>
                    </tr>       
                     
                    <tr>
                        <td><label>Lugar</label></td>      
                        <td><input type="text" id="pp_lugar_masculino" size="30" value= "<?php echo $proximo_partido_masculino["lugar"];?>"></td>
                    </tr>       
                     
                    <tr>
                        <td><label>Fecha</label></td>      
                        <td><input type="text" id="pp_fecha_masculino" size="30" value= "<?php echo $proximo_partido_masculino["fecha"];?>"></td>
                    </tr>       
                
                    <tr>
                        <td><label>Hora</label></td>      
                        <td><input type="text" id="pp_hora_masculino" size="30" value= "<?php echo $proximo_partido_masculino["hora"];?>"></td>
                    </tr>       
                </table>
            </form>
       
    
    </div>
    
    <div id="proximo_partido_femenino">

       Equipo femenino:</br>  

       <form id="form_equipos_feme">
                
                <table class="tabla_proximo_partido">
                    <tr>
                        <td><label>Tipo</label></td>      
                        <td>
                            <select id="pp_tipo_femenino">
                                <option value="no" <?php if ($proximo_partido_femenino["tipo"] == "no") echo "selected"; ?>>Descanso veraniego</option>
                                <option value="amistoso" <?php if ($proximo_partido_femenino["tipo"] == "amistoso") echo "selected"; ?>>Amistoso</option>
                                <option value="pretemporada" <?php if ($proximo_partido_femenino["tipo"] == "pretemporada") echo "selected"; ?>>Pretemporada</option>
                                <option value="temporada" <?php if ($proximo_partido_femenino["tipo"] == "temporada") echo "selected"; ?>>Temporada</option>
                                <option value="playoff" <?php if ($proximo_partido_femenino["tipo"] == "playoff") echo "selected"; ?>>Playoff</option>
                            </select>               
                        </td>         
                    </tr>
                    
                    <tr>
                        <td><label>Jornada</label></td>
                        <td><input type="text" id="pp_jornada_femenino" size="30" value= "<?php echo $proximo_partido_femenino["numeroJornada"];?>"></td>
                    </tr>       
                     
                    <tr>
                        <td><label>Local</label></td>      
                        <td><input type="text" id="pp_local_femenino" size="30" value= "<?php echo $proximo_partido_femenino["equipoLocal"];?>"></td>
                    </tr>       
                 
                    <tr>
                        <td><label>Visitante</label></td>      
                        <td><input type="text" id="pp_visitante_femenino" size="30" value= "<?php echo $proximo_partido_femenino["equipoVisitante"];?>"></td>
                    </tr>       
                     
                    <tr>
                        <td><label>Lugar</label></td>      
                        <td><input type="text" id="pp_lugar_femenino" size="30" value= "<?php echo $proximo_partido_femenino["lugar"];?>"></td>
                    </tr>       
                     
                    <tr>
                        <td><label>Fecha</label></td>      
                        <td><input type="text" id="pp_fecha_femenino" size="30" value= "<?php echo $proximo_partido_femenino["fecha"];?>"></td>
                    </tr>       
                
                    <tr>
                        <td><label>Hora</label></td>      
                        <td><input type="text" id="pp_hora_femenino" size="30" value= "<?php echo $proximo_partido_femenino["hora"];?>"></td>
                    </tr>       
                </table>
            </form>  

    </div>
    
</div>

<div class="clr"></div>

<button id="boton_guardar_proximo_partido" type="button">Guardar</button>
<button id="pp_ver_xml_mas" type="button" onclick="window.open('http://castraservilia.com/android/xml/partidosmasculino.xml')" target="_blank">Ver el xml masculino</button>
<button id="pp_ver_xml_fem" type="button" onclick="window.open('http://castraservilia.com/android/xml/partidosfemenino.xml')" target="_blank">Ver el xml femenino</button>
<button id="pp_generar_xml" type="button">Generar el xml</button>

<?php include ('footer.php'); ?>