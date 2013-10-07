<?php

include("conexion.php");

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

    if ($_POST['pagina'] == "index.php"){ 

        if ($_POST['accion'] == "editar"){    
            
            $contador = 1;
            $contador_array = 0;

            $valor = array($_POST['mensaje'],
                           $_POST['jornada_m'],$_POST['jornada_f'],
                           $_POST['clasificacion_m'],$_POST['clasificacion_f'],
                           $_POST['partidos_jornada_m'],$_POST['partidos_jornada_f'],
                           $_POST['equipos_liga_m'],$_POST['equipos_liga_f']);

            for ($contador; $contador <= 9; $contador++){        
                $res = mysql_query("UPDATE inicioYOpciones SET valor='$valor[$contador_array]' WHERE ID='$contador'");
                $contador_array++;
            }
        }

    }

/* ZONA DE GENERACIÓN DE XML */
/* ------------------------- */

    if ($_POST['pagina'] == "xml"){
        
        if ($_POST['accion'] == "generar_opciones"){               

            $res = mysql_query("SELECT * FROM inicioYOpciones ORDER BY ID ASC");
            $lista = array();
            while( $lista[] = mysql_fetch_array($res));

            $xml = new SimpleXMLElement('<xml/>');

            $draw = $xml->addChild('opciones'); 

            $draw->addChild($lista[0]['variable'],$lista[0]['valor']);
            $draw->addChild($lista[1]['variable'],$lista[1]['valor']);
            $draw->addChild($lista[2]['variable'],$lista[2]['valor']);
            $draw->addChild($lista[3]['variable'],$lista[3]['valor']);
            $draw->addChild($lista[4]['variable'],$lista[4]['valor']);


            $fp = fopen("../../castraservilia.com/android/xml/inicioyopciones.xml","wb");
            
            fwrite($fp,$xml->asXML());
            fclose($fp);

        }
        
        if ($_POST['accion'] == "generar_proximo_partido"){               

            $res = mysql_query("SELECT * FROM proximaJornada ORDER BY ID ASC");
            $xml = new SimpleXMLElement('<xml/>');

            while($row = mysql_fetch_assoc($res)) {
                $draw = $xml->addChild('partido');
                $draw->addChild('id',$row['ID']);
                $draw->addChild('tipo',$row['tipo']);
                $draw->addChild('jornada',$row['numeroJornada']);
                $draw->addChild('local',$row['equipoLocal']);
                $draw->addChild('visitante',$row['equipoVisitante']);
                $draw->addChild('lugar',$row['lugar']);
                $draw->addChild('fecha',$row['fecha']);
                $draw->addChild('hora',$row['hora']); 
            }
            
            $fp = fopen("../../castraservilia.com/android/xml/partidosmasculino.xml","wb");
            fwrite($fp,$xml->asXML());
            fclose($fp);


            $res = mysql_query("SELECT * FROM proximaJornadaFemenino ORDER BY ID ASC");
            $xml = new SimpleXMLElement('<xml/>');

            while($row = mysql_fetch_assoc($res)) {
                $draw = $xml->addChild('partido');
                $draw->addChild('id',$row['ID']);
                $draw->addChild('tipo',$row['tipo']);
                $draw->addChild('jornada',$row['numeroJornada']);
                $draw->addChild('local',$row['equipoLocal']);
                $draw->addChild('visitante',$row['equipoVisitante']);
                $draw->addChild('lugar',$row['lugar']);
                $draw->addChild('fecha',$row['fecha']);
                $draw->addChild('hora',$row['hora']); 
            }

            $fp = fopen("../../castraservilia.com/android/xml/partidosfemenino.xml","wb");
            fwrite($fp,$xml->asXML());
            fclose($fp);

        }
        
        if ($_POST['accion'] == "generar_jornada_completa"){       
             
            $res = mysql_query("SELECT * FROM jornadaCompleta ORDER BY ID ASC");
            $xml = new SimpleXMLElement('<xml/>');

            $partidos_reales = mysql_fetch_array(mysql_query("SELECT * from inicioYOpciones WHERE variable = 'web_partidos_mas' LIMIT 1"));

            $row = mysql_fetch_assoc($res);
            $contador = 1;

            while($contador <= $partidos_reales["valor"]) {
             $draw = $xml->addChild('partido');
             $draw->addChild('id',$row['ID']);
             $draw->addChild('local',$row['local']);
             $draw->addChild('visitante',$row['visitante']);
             $row = mysql_fetch_assoc($res);
             $contador++;
            }

            $fp = fopen("../../castraservilia.com/android/xml/jornadaCompletaMasculino.xml","wb");
            fwrite($fp,$xml->asXML());
            fclose($fp);
            

            $res = mysql_query("SELECT * FROM jornadaCompletaFemenino ORDER BY ID ASC");
            $xml = new SimpleXMLElement('<xml/>');

            $partidos_reales = mysql_fetch_array(mysql_query("SELECT * from inicioYOpciones WHERE variable = 'web_partidos_fem' LIMIT 1"));

            $row = mysql_fetch_assoc($res);
            $contador = 1;

            while($contador <= $partidos_reales["valor"]) {
             $draw = $xml->addChild('partido');
             $draw->addChild('id',$row['ID']);
             $draw->addChild('local',$row['local']);
             $draw->addChild('visitante',$row['visitante']);
             $row = mysql_fetch_assoc($res);
             $contador++;
            }

            $fp = fopen("../../castraservilia.com/android/xml/jornadaCompletaFemenino.xml","wb");
            fwrite($fp,$xml->asXML());
            fclose($fp);    
             
        }
         
        if ($_POST['accion'] == "generar_clasificacion"){    
            
            $res = mysql_query("SELECT * FROM clasificacion ORDER BY ID ASC");
            $xml = new SimpleXMLElement('<xml/>');

            $equipos_reales = mysql_fetch_array(mysql_query("SELECT * from inicioYOpciones WHERE variable = 'web_equipos_mas' LIMIT 1"));

            $row = mysql_fetch_assoc($res);
            $contador = 1;

            while($contador <= $equipos_reales["valor"]) {
             $draw = $xml->addChild('equipo');
             $draw->addChild('posicion',$row['ID']);
             $draw->addChild('nombre',$row['nombre']);
             $draw->addChild('jugados',$row['partidosJugados']);
             $draw->addChild('ganados',$row['partidosGanados']);
             $draw->addChild('perdidos',$row['partidosPerdidos']);
             $draw->addChild('puntos',$row['puntos']);
             $row = mysql_fetch_assoc($res);
             $contador++;
            }

            $fp = fopen("../../castraservilia.com/android/xml/clasificacionMasculino.xml","wb");
            fwrite($fp,$xml->asXML());
            fclose($fp);


            $res = mysql_query("SELECT * FROM clasificacionFemenino ORDER BY ID ASC");
            $xml = new SimpleXMLElement('<xml/>');

            $equipos_reales = mysql_fetch_array(mysql_query("SELECT * from inicioYOpciones WHERE variable = 'web_equipos_fem' LIMIT 1"));

            $row = mysql_fetch_assoc($res);
            $contador = 1;

            while($contador <= $equipos_reales["valor"]) {
             $draw = $xml->addChild('equipo');
             $draw->addChild('posicion',$row['ID']);
             $draw->addChild('nombre',$row['nombre']);
             $draw->addChild('jugados',$row['partidosJugados']);
             $draw->addChild('ganados',$row['partidosGanados']);
             $draw->addChild('perdidos',$row['partidosPerdidos']);
             $draw->addChild('puntos',$row['puntos']);
             $row = mysql_fetch_assoc($res);
             $contador++;
            }

            $fp = fopen("../../castraservilia.com/android/xml/clasificacionFemenino.xml","wb");
            fwrite($fp,$xml->asXML());
            fclose($fp);
            
        }
        
        
        if ($_POST['accion'] == "generar_temporada"){  
            
            $res = mysql_query("SELECT * FROM historicoTemporada ORDER BY ID ASC");
            $xml = new SimpleXMLElement('<xml/>');

            $contador = 1;

            while($row = mysql_fetch_assoc($res)) {
                $draw = $xml->addChild('partido');
                $draw->addChild('id',$contador);
                $draw->addChild('tipo',$row['tipo']);
                $draw->addChild('local',$row['nombreLocal']);
                $draw->addChild('puntosLocal',$row['puntosLocal']);
                $draw->addChild('visitante',$row['nombreVisitante']); 
                $draw->addChild('puntosVisitante',$row['puntosVisitante']);
                $draw->addChild('fecha',$row['fecha']);
                $draw->addChild('url',$row['url']);
                $contador++;
            }

            $fp = fopen("../../castraservilia.com/android/xml/historicoTemporadaMasculino.xml","wb");
            fwrite($fp,$xml->asXML());
            fclose($fp);

            $res = mysql_query("SELECT * FROM historicoTemporadaFemenino ORDER BY ID ASC", $db);
            $xml = new SimpleXMLElement('<xml/>');

            $contador = 1;

            while($row = mysql_fetch_assoc($res)) {
                $draw = $xml->addChild('partido');
                $draw->addChild('id',$contador);
                $draw->addChild('tipo',$row['tipo']);
                $draw->addChild('local',$row['nombreLocal']);
                $draw->addChild('puntosLocal',$row['puntosLocal']);
                $draw->addChild('visitante',$row['nombreVisitante']); 
                $draw->addChild('puntosVisitante',$row['puntosVisitante']);
                $draw->addChild('fecha',$row['fecha']);
                $draw->addChild('url',$row['url']);
                $contador++;
            }

            $fp = fopen("../../castraservilia.com/android/xml/historicoTemporadaFemenino.xml","wb");
            fwrite($fp,$xml->asXML());
            fclose($fp);            
            
        }
        
        
        if ($_POST['accion'] == "generar_libros"){
            
            $res = mysql_query("SELECT * FROM clubLectura ORDER BY ID ASC");
            $xml = new SimpleXMLElement('<xml/>');

            $contador = 1;

            while($row = mysql_fetch_array($res)) {
                $draw = $xml->addChild('libro');
                $draw->addChild('id',$contador);
                $draw->addChild('titulo',$row['libro']);
                $draw->addChild('autor',$row['autor']);
                $draw->addChild('resumen',$row['resumen']);
                $draw->addChild('fecha',$row['fecha']);
                $draw->addChild('hora',$row['hora']);  
                $draw->addChild('lugar',$row['lugar']); 
                $contador++;
            }

            $fp = fopen("../../castraservilia.com/android/xml/clubLectura.xml","wb");
            fwrite($fp,$xml->asXML());
            fclose($fp);
            
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
