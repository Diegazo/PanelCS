<?php

    include ('conexion.php');
    include ('funciones.php');
        
        $tituloPagina = "Inicio";
        $keywords= "Panel de control";
        $description = "Panel de control de la app de Android";
    
    include ('head.php');
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
			$('document').ready(function(){
				$('#boton_guardar_opciones').click(function(){                                      
                                                                             
					jQuery.post("procesar.php", {
						
                                                mensaje:$('#mensaje_bienvenida').val(),						
                                                
                                                jornada_m:$('#opciones_tipo_jornada_masculino').val(),						
                                                clasificacion_m:$('#opciones_tipo_clasificacion_masculino').val(),	
                                                partidos_jornada_m:$('#opciones_partidos_jornada_masculino').val(),		
                                                equipos_liga_m:$('#opciones_equipos_liga_masculino').val(),
                                                
                                                jornada_f:$('#opciones_tipo_jornada_femenino').val(),						
                                                clasificacion_f:$('#opciones_tipo_clasificacion_femenino').val(),	
                                                partidos_jornada_f:$('#opciones_partidos_jornada_femenino').val(),		
                                                equipos_liga_f:$('#opciones_equipos_liga_femenino').val(),
                                                                                                		                                                
                                                pagina:"index.php",
                                                accion:"editar",
					}, function(data, textStatus){
						if(data == 1){
                                                        alert("Modificación correcta");
							location.reload();
						}
						else{
							alert("Error durante la modificación");
						}
					});
				});
                                
                                $('#index_generar_xml').click(function(){  
                                    
                                        jQuery.post("procesar.php", {                         		                                                
                                                
                                                pagina:"xml",
                                                accion:"generar_opciones",
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
    
    $opciones_bruto = db_return_opciones();     
    $opciones = array();
    while( $opciones[] = mysql_fetch_array($opciones_bruto));
?>

<!-- Contenido normal -->
<div id="article">
                
    <div id="div_opciones">
        
        Común
        
        <table class="tabla_opciones">
                    <tr>
                        <td><label>Mensaje</label></td>      
                        <td>
                            <textarea type="text" id="mensaje_bienvenida" cols="50" rows="6" maxlength="199"><?php echo $opciones[0]["valor"];?></textarea>               
                        </td>                    
                    </tr>
        </table>
        
        Opciones masculino
        
        <table class="tabla_opciones">
                    <tr>
                        <td><label>Tipo de jornada</label></td>      
                        <td>
                            <select id="opciones_tipo_jornada_masculino">
                                <option value="no" <?php if ($opciones[1]["valor"] == "no") echo "selected"; ?>>Vacaciones</option>
                                <option value="amistoso" <?php if ($opciones[1]["valor"] == "amistoso") echo "selected"; ?>>Amistoso</option>
                                <option value="pretemporada" <?php if ($opciones[1]["valor"] == "pretemporada") echo "selected"; ?>>Pretemporada</option>
                                <option value="temporada" <?php if ($opciones[1]["valor"] == "temporada") echo "selected"; ?>>Temporada</option>
                                <option value="playoff" <?php if ($opciones[1]["valor"] == "playoff") echo "selected"; ?>>Playoff</option>
                            </select>               
                        </td>                    
                    </tr>
                    
                    <tr>
                        <td><label>Tipo clasificación</label></td>  
                        <td>
                            <select id="opciones_tipo_clasificacion_masculino">
                                <option value="no" <?php if ($opciones[3]["valor"] == "no") echo "selected"; ?>>Vacaciones</option>
                                <option value="amistoso" <?php if ($opciones[3]["valor"] == "amistoso") echo "selected"; ?>>Amistoso</option>
                                <option value="pretemporada" <?php if ($opciones[3]["valor"] == "pretemporada") echo "selected"; ?>>Pretemporada</option>
                                <option value="temporada" <?php if ($opciones[3]["valor"] == "temporada") echo "selected"; ?>>Temporada</option>
                                <option value="playoff" <?php if ($opciones[3]["valor"] == "playoff") echo "selected"; ?>>Playoff</option>
                            </select>
                        </td>
                    </tr>       
                     
                    <tr>
                        <td><label>Número de partidos de la jornada</label></td>      
                        <td><input type="text" id="opciones_partidos_jornada_masculino" size="3" value= "<?php echo $opciones[5]["valor"];?>"></td>
                    </tr>       
                 
                    <tr>
                        <td><label>Número de equipos en la liga</label></td>      
                        <td><input type="text" id="opciones_equipos_liga_masculino" size="3" value= "<?php echo $opciones[7]["valor"];?>"></td>
                    </tr>                           
                         
                </table>
        
        Opciones femenino
        
        <table class="tabla_opciones">
                    <tr>
                        <td><label>Tipo de jornada</label></td>      
                        <td>
                            <select id="opciones_tipo_jornada_femenino">
                                <option value="no" <?php if ($opciones[2]["valor"] == "no") echo "selected"; ?>>Vacaciones</option>
                                <option value="amistoso" <?php if ($opciones[2]["valor"] == "amistoso") echo "selected"; ?>>Amistoso</option>
                                <option value="pretemporada" <?php if ($opciones[2]["valor"] == "pretemporada") echo "selected"; ?>>Pretemporada</option>
                                <option value="temporada" <?php if ($opciones[2]["valor"] == "temporada") echo "selected"; ?>>Temporada</option>
                                <option value="playoff" <?php if ($opciones[2]["valor"] == "playoff") echo "selected"; ?>>Playoff</option>
                            </select>               
                        </td>                    
                    </tr>
                    
                    <tr>
                        <td><label>Tipo clasificación</label></td>  
                        <td>
                            <select id="opciones_tipo_clasificacion_femenino">
                                <option value="no" <?php if ($opciones[4]["valor"] == "no") echo "selected"; ?>>Vacaciones</option>
                                <option value="amistoso" <?php if ($opciones[4]["valor"] == "amistoso") echo "selected"; ?>>Amistoso</option>
                                <option value="pretemporada" <?php if ($opciones[4]["valor"] == "pretemporada") echo "selected"; ?>>Pretemporada</option>
                                <option value="temporada" <?php if ($opciones[4]["valor"] == "temporada") echo "selected"; ?>>Temporada</option>
                                <option value="playoff" <?php if ($opciones[4]["valor"] == "playoff") echo "selected"; ?>>Playoff</option>
                            </select>
                        </td>
                    </tr>       
                     
                    <tr>
                        <td><label>Número de partidos de la jornada</label></td>      
                        <td><input type="text" id="opciones_partidos_jornada_femenino" size="3" value= "<?php echo $opciones[6]["valor"];?>"></td>
                    </tr>       
                 
                    <tr>
                        <td><label>Número de equipos en la liga</label></td>      
                        <td><input type="text" id="opciones_equipos_liga_femenino" size="3" value= "<?php echo $opciones[8]["valor"];?>"></td>
                    </tr>                           
                         
                </table>
    </div>   
    
</div>

<div class="clr"></div>

<button id="boton_guardar_opciones" type="button">Modificar</button>
<button id="index_ver_xml" type="button" onclick="window.open('http://castraservilia.com/android/xml/inicioyopciones.xml')" target="_blank">Ver el xml</button>
<button id="index_generar_xml" type="button">Generar el xml</button>
<?php include ('footer.php'); ?>