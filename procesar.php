<?php

$con = mysql_connect("diegazo.es", "diegazoe_csan", "otraPRUEBA#") or die('Error en conexion a la DB');
mysql_select_db("diegazoe_csAndroid", $con) or die('Error al seleccionar la DB');
mysql_query( 'SET NAMES utf8' , $con);


if ($_POST['pagina'] == "equipos.php"){ 
 
    $contador = 1;

    for ($contador; $contador < 13; $contador++){
        $nombre=$_POST['nombrem'.$contador];
        $res = mysql_query("UPDATE equipos SET Nombre='$nombre' WHERE ID='$contador'");
    }
    
    $contador = 1;
    for ($contador; $contador < 15; $contador++){
        $nombre=$_POST['nombref'.$contador];
        $res = mysql_query("UPDATE equiposFemenino SET Nombre='$nombre' WHERE ID='$contador'");
    }    

}

if ($_POST['pagina'] == "proximopartido.php"){
 
  
        $res = mysql_query("UPDATE proximaJornada
                            SET tipo='".$_POST['tipo_m']."',                                                 
                                numeroJornada='".$_POST['jornada_m']."',
                                equipoLocal='".$_POST['local_m']."',
                                equipoVisitante='".$_POST['visitante_m']."',
                                lugar='".$_POST['lugar_m']."',
                                fecha='".$_POST['fecha_m']."',
                                hora='".$_POST['hora_m']."'
                            WHERE ID=1");
        
        if($res == true){
            
            $res = mysql_query("UPDATE proximaJornadaFemenino
                            SET tipo='".$_POST['tipo_f']."',                                                 
                                numeroJornada='".$_POST['jornada_f']."',
                                equipoLocal='".$_POST['local_f']."',
                                equipoVisitante='".$_POST['visitante_f']."',
                                lugar='".$_POST['lugar_f']."',
                                fecha='".$_POST['fecha_f']."',
                                hora='".$_POST['hora_f']."'
                            WHERE ID=1");	
        }
  
}

if ($_POST['pagina'] == "jornada.php"){
 
    $contador = 1;

    for ($contador; $contador < 13; $contador++){
        $nombrel=$_POST['nombreml'.$contador];
        $nombrev=$_POST['nombremv'.$contador];
        $res = mysql_query("UPDATE jornadaCompleta SET local='$nombrel',visitante='$nombrev' WHERE ID='$contador'");
    }
    
    $contador = 1;
    for ($contador; $contador < 12; $contador++){
        $nombrel=$_POST['nombrefl'.$contador];
        $nombrev=$_POST['nombrefv'.$contador];
        $res = mysql_query("UPDATE jornadaCompletaFemenino SET local='$nombrel',visitante='$nombrev' WHERE ID='$contador'");
    }

}

if ($_POST['pagina'] == "clasificacion.php"){
 
    $contador = 1;

    for ($contador; $contador <= 12; $contador++){
        $nombre=$_POST['nombre_mas_'.$contador];
        $pj=$_POST['pj_mas_'.$contador];
        $pg=$_POST['pg_mas_'.$contador];
        $pp=$_POST['pp_mas_'.$contador];
        $puntos=$_POST['puntos_mas_'.$contador];
        $res = mysql_query("UPDATE clasificacion SET nombre='$nombre',partidosJugados='$pj',partidosGanados='$pg',partidosPerdidos='$pp',puntos='$puntos' WHERE ID='$contador'");
    }   
    
    $contador = 1;

    for ($contador; $contador <= 12; $contador++){
        $nombre=$_POST['nombre_fem_'.$contador];
        $pj=$_POST['pj_fem_'.$contador];
        $pg=$_POST['pg_fem_'.$contador];
        $pp=$_POST['pp_fem_'.$contador];
        $puntos=$_POST['puntos_fem_'.$contador];
        $res = mysql_query("UPDATE clasificacionFemenino SET nombre='$nombre',partidosJugados='$pj',partidosGanados='$pg',partidosPerdidos='$pp',puntos='$puntos' WHERE ID='$contador'");
    }   
    

}

if ($_POST['pagina'] == "temporada.php"){
 
    if ($_POST['accion'] == "editar"){    
    
        $id=$_POST['id'];
        $nombre_local=$_POST['nombre_local'];
        $puntos_local=$_POST['puntos_local'];        
        $nombre_visitante=$_POST['nombre_visitante'];
        $puntos_visitante=$_POST['puntos_visitante'];
        $tipo=$_POST['tipo'];
        $fecha=$_POST['fecha'];
        $url=$_POST['url'];
        
        if ($_POST['genero'] == "masculino"){  
            $res = mysql_query("UPDATE historicoTemporada 
                                SET nombreLocal='$nombre_local',puntosLocal='$puntos_local',nombreVisitante='$nombre_visitante',puntosVisitante='$puntos_visitante',tipo='$tipo',fecha='$fecha',url='$url'   
                                WHERE ID='$id'");
        }
        
        if ($_POST['genero'] == "femenino"){  
            $res = mysql_query("UPDATE historicoTemporadaFemenino
                                SET nombreLocal='$nombre_local',puntosLocal='$puntos_local',nombreVisitante='$nombre_visitante',puntosVisitante='$puntos_visitante',tipo='$tipo',fecha='$fecha',url='$url'   
                                WHERE ID='$id'");
        }
    }      
    
    if ($_POST['accion'] == "borrar"){    
    
        $id=$_POST['id'];        
        
        if ($_POST['genero'] == "masculino"){  
            $res = mysql_query("DELETE FROM historicoTemporada
                                WHERE ID='$id'");
        }
        
        if ($_POST['genero'] == "femenino"){  
            $res = mysql_query("DELETE FROM historicoTemporadaFemenino
                                WHERE ID='$id'");
        }
    }
    
    if ($_POST['accion'] == "nuevo"){    
    
        $nombre_local=$_POST['nombre_local'];
        $puntos_local=$_POST['puntos_local'];        
        $nombre_visitante=$_POST['nombre_visitante'];
        $puntos_visitante=$_POST['puntos_visitante'];
        $tipo=$_POST['tipo'];
        $fecha=$_POST['fecha'];
        $url=$_POST['url']; 
        
        if ($_POST['genero'] == "masculino"){  
            $res = mysql_query("INSERT INTO historicoTemporada
                                (nombreLocal,puntosLocal,nombreVisitante,puntosVisitante,tipo,fecha,url)
                                VALUES
                                ('$nombre_local','$puntos_local','$nombre_visitante','$puntos_visitante','$tipo','$fecha','$url')");
        }
        
        if ($_POST['genero'] == "femenino"){  
            $res = mysql_query("INSERT INTO historicoTemporadaFemenino
                                (nombreLocal,puntosLocal,nombreVisitante,puntosVisitante,tipo,fecha,url)
                                VALUES
                                ('$nombre_local','$puntos_local','$nombre_visitante','$puntos_visitante','$tipo','$fecha','$url')");
        }
    }
    
}

if ($_POST['pagina'] == "clublectura.php"){
 
    if ($_POST['accion'] == "nuevo"){    
    
        $titulo=$_POST['titulo'];
        $autor=$_POST['autor'];        
        $fecha=$_POST['fecha'];
        $hora=$_POST['hora'];
        $lugar=$_POST['lugar'];
        $resumen=$_POST['resumen'];        
        
        $res = mysql_query("INSERT INTO clubLectura
                            (libro,autor,fecha,hora,lugar,resumen)
                            VALUES ('$titulo','$autor','$fecha','$hora','$lugar','$resumen')");
        
    }
    
    if ($_POST['accion'] == "editar"){    
    
        $titulo=$_POST['titulo'];
        $autor=$_POST['autor'];        
        $fecha=$_POST['fecha'];
        $hora=$_POST['hora'];
        $lugar=$_POST['lugar'];
        $resumen=$_POST['resumen'];
        $id=$_POST['posicion'];
        
        $res = mysql_query("UPDATE clubLectura
                            SET libro='$titulo',autor='$autor',fecha='$fecha',hora='$hora',lugar='$lugar',resumen='$resumen'
                            WHERE ID='$id'");        
    }
    
    if ($_POST['accion'] == "borrar"){    
    
        $id=$_POST['posicion'];
        
        $res = mysql_query("DELETE FROM clubLectura
                                WHERE ID='$id'");
       
    }
}

mysql_close();

if($res == true){

        echo "1";
}
else{

        echo "0";
}



?>
