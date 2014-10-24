<?php
    include 'usuario.php';
    /*
    .------------------------------------------.
    |       ACTUALIZACION DE USUARIO           |
    |__________________________________________|*/
    foreach ($_POST as $clave => $valor)
    {
        ${$clave} = $valor;
    }

    if ( $email != $email2 || $password != $password2 || $sex == 0)
    {
	   echo "Correos o Contraseñas No coinciden";
    }
    else
    {
        //Todo parece correcto procedemos con la insercción

        /*`ci`, `nombre`, `apellido`, `correo`, `contrasena`, `telefono`, `sexo`, `nacimiento`, `foto`, `rol`, | `ultimo_acceso`,`altualizado`, `primer_acceso`*/
        if (!actualizar( $id, $id, $name, $lastname, $email, $password, $telephone, $sex, $datebith, $photo, $role, $ultimo_acceso) )
        {
                echo "Error: No se realizó la ACTUALIZACION del usuario";
        }
        else
        {
                echo "Se ACTUALIZO Correctamente";
                echo "Usuario: $name ";
                echo "<br/> Contraseña: $password ";
                echo "<br/> Email: $email";
        }
    }
?>
