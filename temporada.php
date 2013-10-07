<?php

    include ('conexion.php');
    include ('funciones.php');
        
        $tituloPagina = "Histórico temporada";
        $keywords= "Panel de control de control de temporada";
        $description = "Panel de control de la app de Android";
    
    include ('head.php');
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
                    
                    function editar(posicion,genero){
                        
                        var terminacion = genero+"_"+posicion;                        
                        
                        jQuery.post("procesar.php", {
                                                id:$('#id_'+terminacion).val(),
						nombre_local:$('#nombre_local_'+terminacion).val(),
                                                puntos_local:$('#puntos_local_'+terminacion).val(),
                                                nombre_visitante:$('#nombre_visitante_'+terminacion).val(),
                                                puntos_visitante:$('#puntos_visitante_'+terminacion).val(),
                                                genero:genero,
                                                tipo:$('#tipo_'+terminacion).val(),
                                                fecha:$('#fecha_'+terminacion).val(),
                                                url:$('#url_'+terminacion).val(),        
                                                
                                                pagina:"temporada.php",
                                                accion:"editar",
					}, function(data, textStatus){
						if(data == 1){
                                                        alert("Inserción correcta");
							location.reload();
						}
						else{
							alert("Error durante la inserción");
						}
					});
                    }
                    
                    function borrar(posicion,genero){
                        
                        var terminacion = genero+"_"+posicion;
                        
                        jQuery.post("procesar.php", {
                            id:$('#id_'+terminacion).val(),						 
                            genero:genero,

                            pagina:"temporada.php",
                            accion:"borrar",
                            }, function(data, textStatus){
                                    if(data == 1){
                                            alert("Borrado correcto");
                                            location.reload();
                                    }
                                    else{
                                            alert("No se ha podido eliminar");
                                    }
                            });
                        
                    }
                    
			$('document').ready(function(){				
                                
                                $("[id^=editar_masculino_]").click(function(){
                                    var posicion = this.id.slice(17);
                                    var genero = this.id.slice(7,16);
                                    
                                    editar(posicion,genero);                                   
                                });
                                
                                $("[id^=editar_femenino_]").click(function(){
                                    var posicion = this.id.slice(16);
                                    var genero = this.id.slice(7,15);
                                    
                                    editar(posicion,genero);                                   
                                });
                                
                                $("[id^=borrar_masculino_]").click(function(){
                                    var posicion = this.id.slice(17);
                                    var genero = this.id.slice(7,16);
                                    
                                    borrar(posicion,genero);
                                });
                                
                                $("[id^=borrar_femenino_]").click(function(){
                                    var posicion = this.id.slice(16);
                                    var genero = this.id.slice(7,15);
                                    
                                    borrar(posicion,genero);
                                });
                                
                                $("#nuevo_partido").click(function(){
                                    jQuery.post("procesar.php", {                                                
						nombre_local:$('#nombre_local').val(),
                                                puntos_local:$('#puntos_local').val(),
                                                nombre_visitante:$('#nombre_visitante').val(),
                                                puntos_visitante:$('#puntos_visitante').val(),
                                                genero:$('#equipo').val(),
                                                tipo:$('#tipo').val(),
                                                fecha:$('#fecha').val(),
                                                url:$('#url').val(),        
                                                
                                                pagina:"temporada.php",
                                                accion:"nuevo",
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
                                
                                $('#temporada_generar_xml').click(function(){  
                                    
                                        jQuery.post("procesar.php", {                         		                                                
                                                
                                                pagina:"xml",
                                                accion:"generar_temporada",
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
    
    
    $historico_masculino = db_return_historico_masculino();      
    $historico_femenino = db_return_historico_femenino(); 
    
    $contador_equipos_masculino = 1;
    $contador_equipos_femenino = 1;    
    
    
?>

<!-- Contenido normal -->
<div id="article">
    
    <div id="añadir_partido_historico">
        Añadir partido:</br>
        
        <table class="tabla_temporada">
                    
                    <tr>                        
                        <th scope="col">Local</th>
                        <th scope="col">Ptos</th>
                        <th scope="col">Visitante</th>
                        <th scope="col">Ptos</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Url</th>                        
                        <th scope="col">Equipo</th>   
                    </tr>   
                        
                    <tr>                        
                        <td>
                            <input type="text" id="nombre_local" size="15">                                 
                        </td>
                        <td>
                            <input type="text" id="puntos_local" size="2">
                        </td>
                        <td>
                            <input type="text" id="nombre_visitante" size="15">        
                        <td>
                            <input type="text" id="puntos_visitante" size="2">
                        </td>
                        <td>
                           <select id="tipo"> 
                                <option value="no">Sin tipo</option>
                                <option value="amistoso">Amistoso</option>
                                <option value="pretemporada">Pretemporada</option>
                                <option value="temporada">Temporada</option>
                                <option value="playoff">Playoff</option>
                           </select> 
                        </td>
                        <td>
                            <input type="text" id="fecha" size="7">
                        </td>
                        <td>
                            <input type="text" id="url" size="20">
                        </td>
                        <td>
                            <select id="equipo"> 
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                        </td>                        
                    </tr>
                    
                </table>
        
        <button id="nuevo_partido" type="button">Guardar</button>
        
    </div>
    
    
    <div id="temporada_liga_masculina">
    
        Temporada liga masculina:</br>  
       
            <form id="form_clasificacion_masc">
                
                <table class="tabla_temporada">
                    
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Local</th>
                        <th scope="col">Ptos</th>
                        <th scope="col">Visitante</th>
                        <th scope="col">Ptos</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Url</th>                        
                        <th scope="col">Editar</th>   
                        <th scope="col">Borrar</th>   
                    </tr>
                    
                    <?php while($partido = mysql_fetch_array($historico_masculino)) : ?> 
                        
                        <tr>
                            <td><?php echo $contador_equipos_masculino;?>.
                            </td>
                            <td>
                                <input type="text" id="nombre_local_masculino_<?php echo $contador_equipos_masculino;?>" size="15" 
                                    value="<?php echo $partido["nombreLocal"]?>">                                 
                            </td>
                            <td>
                                <input type="text" id="puntos_local_masculino_<?php echo $contador_equipos_masculino;?>" size="2"
                                       value="<?php echo $partido["puntosLocal"]?>">
                            </td>
                            <td>
                                <input type="text" id="nombre_visitante_masculino_<?php echo $contador_equipos_masculino;?>" size="15"
                                    value="<?php echo $partido["nombreVisitante"]?>">        
                            <td>
                                <input type="text" id="puntos_visitante_masculino_<?php echo $contador_equipos_masculino;?>" size="2" 
                                value="<?php echo $partido["puntosVisitante"]?>">
                            </td>
                            <td>
                               <select id="tipo_masculino_<?php echo $contador_equipos_masculino;?>"> 
                                    <option value="no" <?php if ($partido["tipo"] == "no") echo "selected"; ?>>Sin tipo</option>
                                    <option value="amistoso" <?php if ($partido["tipo"] == "amistoso") echo "selected"; ?>>Amistoso</option>
                                    <option value="pretemporada" <?php if ($partido["tipo"] == "pretemporada") echo "selected"; ?>>Pretemporada</option>
                                    <option value="temporada" <?php if ($partido["tipo"] == "temporada") echo "selected"; ?>>Temporada</option>
                                    <option value="playoff" <?php if ($partido["tipo"] == "playoff") echo "selected"; ?>>Playoff</option>
                               </select> 
                            </td>
                            <td>
                                <input type="text" id="fecha_masculino_<?php echo $contador_equipos_masculino;?>" size="7" 
                                value="<?php echo $partido["fecha"]?>">
                            </td>
                            <td>
                                <input type="text" id="url_masculino_<?php echo $contador_equipos_masculino;?>" size="20" 
                                value="<?php echo $partido["url"]?>">
                            </td>
                            <td>
                                <img id="editar_masculino_<?php echo $contador_equipos_masculino;?>" height="20" width="20" src="img/editar.png">
                            </td>
                            <td>
                                <img id="borrar_masculino_<?php echo $contador_equipos_masculino;?>" height="20" width="20" src="img/borrar.jpg">
                            </td>
                            <input hidden type="text" id="id_masculino_<?php echo $contador_equipos_masculino;?>" size="7" 
                                value="<?php echo $partido["ID"]?>">
                        </tr>

                        <?php $contador_equipos_masculino++;?>
                    <?php endwhile; ?>
                    
                </table>
            </form>        
    
    </div>
    
    <div id="temporada_liga_femenina">

       Temporada liga femenina:</br>  
       
       <form id="form_clasificacion_feme">
                
            <table class="tabla_temporada">

                <tr>
                    <th scope="col"></th>
                    <th scope="col">Local</th>
                    <th scope="col">Ptos</th>
                    <th scope="col">Visitante</th>
                    <th scope="col">Ptos</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Url</th>                        
                    <th scope="col">Editar</th>   
                    <th scope="col">Borrar</th>   
                </tr>

                <?php while($partido = mysql_fetch_array($historico_femenino)) : ?> 

                    <tr>
                        <td><?php echo $contador_equipos_femenino;?>.
                        </td>
                        <td>
                            <input type="text" id="nombre_local_femenino_<?php echo $contador_equipos_femenino;?>" size="15" 
                                value="<?php echo $partido["nombreLocal"]?>">                                 
                        </td>
                        <td>
                            <input type="text" id="puntos_local_femenino_<?php echo $contador_equipos_femenino;?>" size="2"
                                   value="<?php echo $partido["puntosLocal"]?>">
                        </td>
                        <td>
                            <input type="text" id="nombre_visitante_femenino_<?php echo $contador_equipos_femenino;?>" size="15"
                                value="<?php echo $partido["nombreVisitante"]?>">        
                        <td>
                            <input type="text" id="puntos_visitante_femenino_<?php echo $contador_equipos_femenino;?>" size="2" 
                            value="<?php echo $partido["puntosVisitante"]?>">
                        </td>
                        <td>
                           <select id="tipo_femenino_<?php echo $contador_equipos_femenino;?>"> 
                                <option value="no" <?php if ($partido["tipo"] == "no") echo "selected"; ?>>Sin tipo</option>
                                <option value="amistoso" <?php if ($partido["tipo"] == "amistoso") echo "selected"; ?>>Amistoso</option>
                                <option value="pretemporada" <?php if ($partido["tipo"] == "pretemporada") echo "selected"; ?>>Pretemporada</option>
                                <option value="temporada" <?php if ($partido["tipo"] == "temporada") echo "selected"; ?>>Temporada</option>
                                <option value="playoff" <?php if ($partido["tipo"] == "playoff") echo "selected"; ?>>Playoff</option>
                           </select> 
                        </td>
                        <td>
                            <input type="text" id="fecha_femenino_<?php echo $contador_equipos_femenino;?>" size="7" 
                            value="<?php echo $partido["fecha"]?>">
                        </td>
                        <td>
                            <input type="text" id="url_femenino_<?php echo $contador_equipos_femenino;?>" size="20" 
                            value="<?php echo $partido["url"]?>">
                        </td>
                        <td>
                            <img id="editar_femenino_<?php echo $contador_equipos_femenino;?>" height="20" width="20" src="img/editar.png">
                        </td>
                        <td>
                            <img id="borrar_femenino_<?php echo $contador_equipos_femenino;?>" height="20" width="20" src="img/borrar.jpg">
                        </td>
                        <input hidden type="text" id="id_femenino_<?php echo $contador_equipos_femenino;?>" size="7" 
                            value="<?php echo $partido["ID"]?>">
                    </tr>

                    <?php $contador_equipos_femenino++;?>
                <?php endwhile; ?>

            </table>
        </form>        

    </div>
    
</div>

<div class="clr"></div>

<button id="temporada_ver_xml_mas" type="button" onclick="window.open('http://castraservilia.com/android/xml/historicoTemporadaMasculino.xml')" target="_blank">Ver el xml masculino</button>
<button id="temporada_ver_xml_fem" type="button" onclick="window.open('http://castraservilia.com/android/xml/historicoTemporadaFemenino.xml')" target="_blank">Ver el xml femenino</button>
<button id="temporada_generar_xml" type="button">Generar el xml</button>


<?php include ('footer.php'); ?>