<?php

function conectar()
    {
        $serv = "127.0.0.1";
        $mibbdd = "ods_db";
        $ususerv = "root";
        $contra = "";
        $conex = mysqli_connect($serv, $ususerv, $contra, $mibbdd);

        return $conex;
    }

    function mostrar($articulo){

        $consulta="SELECT * FROM productos where NOMBREARTÍCULO='$articulo'";
        $result = mysqli_query(conectar(),$consulta);

        if(strcmp($articulo="SERRUCHO")){

            while ($fila = $result -> fetch_assoc()){
                echo $fila["NOMBREARTÍCULO"] . " ";
                echo $fila["SECCIÓN"] . " ";
                echo $fila["PRECIO"] . " ";
                echo "<br>";
            }
        }else{
            echo "Mal, volver seleccionar";
        }

    }



?>