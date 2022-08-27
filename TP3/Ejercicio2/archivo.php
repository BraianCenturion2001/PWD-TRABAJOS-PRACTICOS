<?php

if(isset($_POST)){
    
    $dir = './Archivos/';

    if ($_FILES['formFile']["error"] <= 0) {
        
        
        // Intentamos copiar el archivo al servidor.
       if (!copy($_FILES['formFile']["tmp_name"], $dir.$_FILES['formFile']['name'])) {
        echo "ERROR: no se pudo cargar el archivo ";
       }else{
        echo "El archivo ".$_FILES['formFile']["name"]." se ha copiado con Éxito <br />";
        $nombreFichero =$_FILES['formFile']["name"];
        $contenido = leerFicheroCompleto($nombreFichero);
       }
    }else{
        echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
    }

    
} else {
    echo "No se recibieron datos <br />";
    echo "<form action=prueba.html method=''><input type='submit' value='Regresar'></form>";
}


function leerFicheroCompleto($nombre_fichero){
   
   $fichero_texto = fopen("./Archivos/".$nombre_fichero, "r");
   
   $contenido_fichero = fread($fichero_texto, filesize("./Archivos/".$nombre_fichero));

   return $contenido_fichero;
}

?>

<html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
    <div class="container mt-4 mb-4">
        <textarea class="form-control" style="height: 250px;">
            <?php echo $contenido ?>
</textarea>
    </div>
    <form action=index.html method=''><input type='submit' value='Regresar' class="btn btn-primary"></form>
</html>
