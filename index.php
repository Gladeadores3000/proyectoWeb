<?php
	
 /*
    .------------------------------------------.
    |     OPERACIONES PARA                     |
    |               LA ENTIDAD NOTICIA  	   |
    |__________________________________________|*/

    include 'opGenericas.php';
/*
    .------------------------------------------.
    |                  INSERTAR                |
    |__________________________________________|*/
    function insertarNoticia($titulo, $descripcion,$autor){

            $query = "INSERT INTO noticia VALUES (CURRENT_TIMESTAMP,'
                                ".$titulo."','".$descripcion."',CURRENT_TIMESTAMP,'".$autor."')";
                                
            $result = ejecutar($query);   

            return ( $result );
	}

    /*
    .------------------------------------------.
    |    Filtrar  por nombre y usuario         |
    |__________________________________________|*/
    function filtrarNoticia($titulo, $autor){
            $query = "select * from noticia WHERE titulo = '".$titulo."', autor = ".$autor."";
            return (ejecutar($query));
            
    }

	/*
    .------------------------------------------.
    |                  Listar 				   |
    |									       |
    |__________________________________________|*/

    function listarNoticia($cantidad){

    	$query = "select * from noticia LIMIT ".$cantidad."";

    	return (ejecutar($query));
    }

		/*
    .------------------------------------------.
    |                  actualizar              |
    |__________________________________________|*/

	function actualizarNoticia($titulo,$descripcion,$creacion){

		$query = "UPDATE noticia SET titulo= '".$titulo
            ."', descripcion = '".$descripcion."',modidficacion= CURRENT_TIMESTAMP
             WHERE creacion = '".$creacion."'";

        $result = ejecutar($query);

        return ($result);
	}

	/*
    .------------------------------------------.
    |                 Eliminar 				   |
    |		opGenericas.eliminar_objeto()      |
    |__________________________________________|*/

?>
