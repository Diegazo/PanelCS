<?php

    include ('conexion.php');
    include ('funciones.php');
        
        $tituloPagina = "Club de lectura";
        $keywords= "Panel de control del club de lectura";
        $description = "Panel de control de la app de Android";
    
    include ('head.php');
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
                                 
			$('document').ready(function(){	
                                
                                $("#nuevo_libro").click(function(){
                                    jQuery.post("procesar.php", {                                                
						titulo:$('#libro_libro').val(),
                                                autor:$('#libro_autor').val(),
                                                fecha:$('#libro_fecha').val(),
                                                hora:$('#libro_hora').val(),
                                                lugar:$('#libro_lugar').val(),
                                                resumen:$('#libro_resumen').val(),
                                                
                                                pagina:"clublectura.php",
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
                                
                                $("[id^=editar_libro_]").click(function(){
                                    
                                    var posicion = this.id.slice(13);                                    
                                    
                                    jQuery.post("procesar.php", {                                                
						titulo:$('#libro_libro_'+posicion).val(),
                                                autor:$('#libro_autor_'+posicion).val(),
                                                fecha:$('#libro_fecha_'+posicion).val(),
                                                hora:$('#libro_hora_'+posicion).val(),
                                                lugar:$('#libro_lugar_'+posicion).val(),
                                                resumen:$('#libro_resumen_'+posicion).val(),
                                                posicion:$('#libro_id_'+posicion).val(),
                                                
                                                pagina:"clublectura.php",
                                                accion:"editar",
					}, function(data, textStatus){
						if(data == 1){
                                                        alert("Edición correcta");
							location.reload();
						}
						else{
							alert("Error durante la edición");
						}
					});
                                });
                                
                                $("[id^=eliminar_libro_]").click(function(){
                                    
                                    var posicion = this.id.slice(15);                                    
                                    
                                    jQuery.post("procesar.php", { 
                                                posicion:$('#libro_id_'+posicion).val(),
                                                
                                                pagina:"clublectura.php",
                                                accion:"borrar",
					}, function(data, textStatus){
						if(data == 1){
                                                        alert("Eliminado correctamente");
							location.reload();
						}
						else{
							alert("Error durante el borrado");
						}
					});
                                });
			});
		</script>
    
<?php    
    include ('header.php');    
    
    
    $listado_libros = db_return_listado_libros();           
    
    $contador_libros = 1;    
    
    
?>

<!-- Contenido normal -->
<div id="article">
    
    <div id="añadir_libro">
        Añadir libro:</br>
        
        <div class="ficha_libro">
            <div class="ficha_libro_izquierda">
                <ul>
                    <li>
                        <label>Título: </label>
                        <input type="text" id="libro_libro" size="30">  
                    </li>
                    <li>
                        <label>Autor: </label>
                        <input type="text" id="libro_autor" size="30">                                  
                    </li>
                    <li>
                        <label>Fecha: </label>
                        <input type="text" id="libro_fecha" size="10">                                  
                    </li>
                    <li>
                        <label>Hora: </label>
                        <input type="text" id="libro_hora" size="6">                                  
                    </li>
                    <li>
                        <label>Lugar: </label>
                        <input type="text" id="libro_lugar" size="30">                                  
                    </li>                    
                </ul> 
                <button id="nuevo_libro" type="button">Guardar</button>      
            </div> <!-- De la columna izquierda -->
            
            <div class="ficha_libro_derecha">
                
                <ul>
                    <li>
                        <label>Resumen: </br></label>
                        <textarea type="text" id="libro_resumen" cols="50" rows="8" maxlength="1499"></textarea>  
                    </li>
                </ul>
                
            </div> <!-- De la columna derecha -->
            
        </div>
        <div class="clr"></div>       
        
    </div>    
    
    <div id="lista_libros">
     Listado de libros: </br>   
     
     <?php while($libro = mysql_fetch_array($listado_libros)) : ?>                         
                        
        <div class="ficha_libro">
                <div class="ficha_libro_izquierda">
                    <ul>
                        <li>
                            <label>Título: </label>
                            <input type="text" id="libro_libro_<?php echo $contador_libros?>" size="30"
                                   value="<?php echo $libro["libro"]?>">  
                        </li>
                        <li>
                            <label>Autor: </label>
                            <input type="text" id="libro_autor_<?php echo $contador_libros?>" size="30"
                                   value="<?php echo $libro["autor"]?>">
                        </li>
                        <li>
                            <label>Fecha: </label>
                            <input type="text" id="libro_fecha_<?php echo $contador_libros?>" size="10"
                                   value="<?php echo $libro["fecha"]?>">
                        </li>
                        <li>
                            <label>Hora: </label>
                            <input type="text" id="libro_hora_<?php echo $contador_libros?>" size="6"
                                   value="<?php echo $libro["hora"]?>">
                        </li>
                        <li>
                            <label>Lugar: </label>
                            <input type="text" id="libro_lugar_<?php echo $contador_libros?>" size="30"
                                   value="<?php echo $libro["lugar"]?>">
                        </li>                       
                         <input hidden type="text" id="libro_id_<?php echo $contador_libros?>" size="5"
                                   value="<?php echo $libro["ID"]?>">
                    </ul> 
                    
                    <button id="editar_libro_<?php echo $contador_libros?>" type="button">Editar</button>
                    <button id="eliminar_libro_<?php echo $contador_libros?>" type="button">Eliminar</button>
                    
                </div> <!-- De la columna izquierda -->

                <div class="ficha_libro_derecha">

                    <ul>
                        <li>
                            <label>Resumen: </br></label>
                            <textarea type="text" id="libro_resumen_<?php echo $contador_libros?>" cols="50" rows="8" maxlength="1499"><?php echo $libro["resumen"]?></textarea>  
                        </li>
                    </ul>

                </div> <!-- De la columna derecha -->

            </div> <!-- De la ficha -->
            
            <?php $contador_libros++;
                  endwhile; ?>
        
    </div> <!-- Fin de la lista  -->
    
</div> <!-- Fin de la sección  -->

<div class="clr"></div>


<?php include ('footer.php'); ?>