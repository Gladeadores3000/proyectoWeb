<?php
 /*  .------------------------------------------.
    |           INSERCION DE NOTIICIA           |
    |__________________________________________|*/
    include 'noticiaOp.php';
     
    foreach ($_POST as $clave => $valor)
    {
        ${$clave} = $valor;
    }
    $author = 12345678;
    if(!insertarNoticia($titulo, $descripcion, $author))
    {
        echo "Erro no se creo la noticia";
    } 
    else
    {       
       
    }    
    
    $self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
    //header("refresh:0; url=$self"); //Refrescamos cada xxx segundos
    header('menu.php?clase=noticia&rol=1&tabla=noticia#noticia');
    

?>
