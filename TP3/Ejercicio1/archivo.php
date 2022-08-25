<?php

//Verificacion si el GET recibio algo
if ($_POST){
    $dir = '/archivos';
    
    if ($_FILES['formFile']["error"] <= 0) {
        echo "Nombre: " . $_FILES['formFile']['name'] . "<br />";
        echo "Tipo: " . $_FILES['formFile']['type'] . "<br />";
        echo "Tamaño: " . ($_FILES['formFile']["size"] / 1024) . " kB<br />";
        echo "Carpeta temporal: " . $_FILES['formFile']['tmp_name']." <br />";
        // Intentamos copiar el archivo al servidor.
       if (!copy($_FILES['formFile']['tmp_name'], $dir.$_FILES['formFile']['name'])) {
        echo "ERROR: no se pudo cargar el archivo ";
       }else{
        echo "El archivo ".$_FILES["formFile"]["name"]." se ha copiado con Éxito <br />";
       }
    }else{
        echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
    }

    echo "<form action=prueba.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=prueba.html method=''><input type='submit' value='Regresar'></form>";
}

?>