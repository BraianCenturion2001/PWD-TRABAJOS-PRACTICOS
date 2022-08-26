<?php

//Verificacion si el POST recibio algo

//echo $_FILES["formFile"]['name'];

if(isset($_POST)){

    $dir = './archivos/';

    if ($_FILES["formFile"]['error'] <= 0) {
        echo "Nombre: " . $_FILES['formFile']["name"] . "<br />";
        echo "Tipo: " . $_FILES['formFile']["type"] . "<br />";
        echo "Tamaño: " . ($_FILES['formFile']["size"] / 1024) . " kB<br />";
        echo "Carpeta temporal: " . $_FILES['formFile']["tmp_name"]." <br />";

        // Intentamos copiar el archivo al servidor.
       if (!copy($_FILES['formFile']['tmp_name'], $dir.$_FILES['formFile']['name'])) {
        echo "ERROR: no se pudo cargar el archivo ";
       }else{
        echo "El archivo ".$_FILES["formFile"]["name"]." se ha copiado con Éxito <br />";
        $nombreFichero =$_FILES['formFile']["name"];
        
       }
    }else{
        echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
    }

    
} else {
    echo "No se recibieron datos <br />";
    echo "<form action=prueba.html method=''><input type='submit' value='Regresar'></form>";
}



?>

<html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
    <div class="container mt-4 mb-4">
        <a href="<?php echo $dir.$nombreFichero?>">VER DOCUMENTO
    </div>
    <form action=index.html method=''><input type='submit' value='Regresar' class="btn btn-primary"></form>
</html>
