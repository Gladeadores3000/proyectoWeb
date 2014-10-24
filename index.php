<?php
/*
 *  OPERACIONES GENERICAS APLICADAS A TODOS LOS OBJETOS DEL SISTEMA
 */
    include 'conexion.php';
    
    /*|------------------------------------------|
      |                   EXISTE                 |
      |__________________________________________|*/
    /* Verifica si el id se encuentra en la tabla
        @$table: nombre de la tabla en la que se consultara
        @$key: nombre del atributo clave de la tabla.
        @$id: valor que se verifica si esta en $table
     * 
     * Return: true si existe el objeto.
    */
    function existe($table, $key, $id)
    {	
        $query = "select * from ".$table." where ".$key." = '".$id."'";
        $result = ejecutar($query); //mysqli_query($link, $query) or die (mysqli_error($link));
        
        return($result);
    }
    /*|------------------------------------------|
      |                 ELIMINAR                 |
      |__________________________________________|*/
    /*  Elimina un obejto
     * @$table es tipo de objeto a eliminar
     * @$key es el atributo clave del objeto
     * @$id es el identificador del objeto a eliminar
     * @$link es el enlace a la base de datos a tratar
     * Return:
     * true si se ejecuto correctamente
     */
    function eliminar_objeto($table, $key, $id)
    {

        $query = "delete from ".$table." where ".$key." = '".$id."'";
        $result = ejecutar($query); //mysqli_query($link, $query) or die (mysqli_error($link));
        
        return ($result);
    }
    /*|------------------------------------------|
      |               CONSULTAR UNO              |
      |__________________________________________|*/
    /* Retorna un Array asociativo con los atributos del 'table' @key */
    function consultar($table, $key, $id) {
        
        $query ="select * from ".$table." WHERE ".$key." = '".$id."'";
        $datos=ejecutar($query); //mysqli_query($sql,$link) or die (mysql_error());
        
        $row = mysql_fetch_array($datos);
        
        print_r($row);
        return($row);
    }
    /*|------------------------------------------|
      |              CONSULTAR TODOS             |
      |__________________________________________|*/
    function consultarTodos($table) {
        
        $query ="select * from ".$table;
        $datos = ejecutar($query); //mysqli_query($sql,$link) or die (mysql_error());
        
        $row=mysql_fetch_array($datos);
        
        print_r($row);

        return($row);
    }
    /*|------------------------------------------|
      |                FILTRAR                   |
      |__________________________________________|*/
    function consultarTodos($table) {
        
        $query ="select * from ".$table;
        $datos = ejecutar($query); //mysqli_query($sql,$link) or die (mysql_error());
        
        $row=mysql_fetch_array($datos);
        
        print_r($row);

        return($row);
    }

    
?>

