<?php
 /*
    .------------------------------------------.
    |     OPERACIONES PARA                     |
    |                 LA ENTIDAD USUARIO       |
    |__________________________________________|*/


    include 'opGenericas.php';

	
     /*
    .------------------------------------------.
    |                  INSERTAR                |
    |__________________________________________|*/
    /*`ci`, `nombre`, `apellido`, `correo`, `contrasena`, `telefono`, `sexo`, `nacimiento`, `foto`, `rol`, |`ultimo_acceso`, `altualizado`, `primer_acceso`*/
	function insertar( $ci, $nombre, $apellido, $correo, $contraseña, $telefono, $sexo, $nacimiento, $foto, $rol) {
        
        if ( !existe("usuario","ci",$ci) && !existe("usuario", "correo", $correo)) {
            $query = "INSERT INTO usuario VALUES ('"
                                .$ci."','".$nombre."','".$apellido."','".$correo."','".$contraseña."','"
                                .$telefono."','".$sexo."','".$nacimiento."','".$foto."',".$rol.",'0000-00-00' ,CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
                                
            $result = ejecutar($query);    //       mysqli_query($link, $query) or die (mysql_error());

            return ( $result );

        }   
        else
        {
            echo "La cedula o la cuenta de correo ya están en uso";
            return false;
        }
	}
	/*
    .------------------------------------------.
    |                ACTUALIZAR                |
    |__________________________________________|*/
    function actualizar($clave, $ci, $nombre, $apellido, $correo, $contraseña, $telefono, $sexo, $nacimiento, $foto, $rol, $ultimo_acceso) {
            
            $query = "UPDATE usuario SET ci= '".$ci
            ."',nombre ='".$nombre."',apellido ='".$apellido
            ."',correo ='".$correp."',contrasena ='".$contraseña
            ."',telefono ='".$telefono."',sexo ='".$sexo
            ."',nacimiento ='".$nacimiento."',foto ='".$foto
            ."',rol ='".$rol.", ultimo_acceso =".$ultimo_acceso
            ."',actualizado = CURRENT_TIMESTAMP".
            ." WHERE ci = '".$clave."'";
            
            $result = ejecutar($query);//mysqli_query($link, $query) or die (mysql_error());

            return mysqli_affected_rows($result);

    }
    
?>
