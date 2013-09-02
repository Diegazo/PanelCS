<?php

 /* FUNCIONES VINCULADAS AL MANEJO DE LAS BASES DE DATOS */


        /*function db_return_contenido($contenido){
            return mysql_fetch_array(mysql_query("SELECT * from contenido WHERE id='$contenido'",$GLOBALS["conexionglobal"]));
        }*/      
        
        function db_return_equipos_masculino(){
            return mysql_query("SELECT * from equipos",$GLOBALS["conexionglobal"]);
        }
        
        function db_return_equipos_femenino(){
            return mysql_query("SELECT * from equiposFemenino",$GLOBALS["conexionglobal"]);
        }
        
?>