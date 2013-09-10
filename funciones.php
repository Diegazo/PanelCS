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
        
        function db_return_proximo_partido_masculino(){
            return mysql_fetch_array(mysql_query("SELECT * from proximaJornada",$GLOBALS["conexionglobal"]));
        }
        
        function db_return_proximo_partido_femenino(){
            return mysql_fetch_array(mysql_query("SELECT * from proximaJornadaFemenino",$GLOBALS["conexionglobal"]));
        }
        
        function db_return_proxima_jornada_completa_masculino(){
            return mysql_query("SELECT * from jornadaCompleta",$GLOBALS["conexionglobal"]);
        }
        
        function db_return_proxima_jornada_completa_femenino(){
            return mysql_query("SELECT * from jornadaCompletaFemenino",$GLOBALS["conexionglobal"]);
        }
        
        function db_maximo_partidos_jornada_masculino(){
            return mysql_fetch_array(mysql_query("SELECT * from inicioYOpciones WHERE variable = 'web_partidos_mas' LIMIT 1",$GLOBALS["conexionglobal"]));
        }
        
        function db_maximo_partidos_jornada_femenino(){
            return mysql_fetch_array(mysql_query("SELECT * from inicioYOpciones WHERE variable = 'web_partidos_fem' LIMIT 1",$GLOBALS["conexionglobal"]));
        }
        
?>