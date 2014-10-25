 // Conectando, seleccionando la base de datos
    $link = mysql_connect('localhost', 'root', '')
        or die('No se pudo conectar: ' . mysql_error());
    echo 'Connected successfully<br>';
    mysql_select_db('sonsalsero') or die('No se pudo seleccionar la base de datos');

     $name = $_POST['image_name'];
     $tipo = $_FILES['archivo']['type'];
     $url = 'images/'.$_FILES['archivo']['name'];
     
     $url = str_replace(' ', '', $url);

     echo $name." ".$tipo." ".$url."<br>";
      $query = "INSERT INTO contenido VALUES ('".$name."',  '".$tipo."',  '".$url."', CURRENT_TIMESTAMP , CURRENT_TIMESTAMP ,  12345678)";
     $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    echo "Nombre: ".$_FILES['archivo']['name']."<br>";
        echo "Tipo: ".$_FILES['archivo']['type']."<br>";
        echo "Tamaño: ".($_FILES['archivo']["size"]/1024)."kb<br>";
        echo "Carpeta: ".$_FILES['archivo']['tmp_name'] ;
    // echo $result;
    if($_FILES['archivo']["error"]>0)
    {
        echo "Error: ". $_FILES['archivo']["error"]."<br>";
    } 
    else
    {       
       /* echo "Nombre: ".$_FILES['archivo']['name']."<br>";
        echo "Tipo: ".$_FILES['archivo']['type']."<br>";
        echo "Tamaño: ".($_FILES['archivo']["size"]/1024)."kb<br>";
        echo "Carpeta: ".$_FILES['archivo']['tmp_name'] ;*/
    }    
    move_uploaded_file($_FILES['archivo']['tmp_name'], 
        "images/".$_FILES['archivo']['name']);
    rename ("images/".$_FILES['archivo']['name'],"images/$url");
    // Liberar resultados
    //mysql_free_result($result);
        // Cerrar la conexión
    mysql_close($link);


    $self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
    header("refresh:0; url=$self"); //Refrescamos cada xxx segundos
    header('Location: menu.php?clase=galeria&rol=1&tabla=contenido#galeria');
