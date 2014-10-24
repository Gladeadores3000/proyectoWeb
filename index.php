/*|------------------------------------------|
      |              CONSULTAR TODOS             |
      |__________________________________________|*/
    function consultarTodos($table, $i, $f) {
        
        $query ="select * from ".$table ."limit ".$i.",".$f;
        $datos = ejecutar($query); //mysqli_query($sql,$link) or die (mysql_error());
        
        $row=mysql_fetch_array($datos);
        
        print_r($row);

        return($row);
    }
    /*|------------------------------------------|
      |                FILTRAR                   |
      |__________________________________________|*/
    function filtrar($table) {
        
        $query ="select * from ".$table." WHERE ;
        $datos = ejecutar($query); //mysqli_query($sql,$link) or die (mysql_error());
        
        $row=mysql_fetch_array($datos);
        
        print_r($row);

        return($row);
    }

    
?>


