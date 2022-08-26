<?php

//Verificacion si el GET recibio algo
if ($_GET){
   
    echo "Hola yo soy ".$_GET['nombre3'].", ".$_GET['apellido3']." tengo ".$_GET['edad3']." y vivo en ".$_GET['direccion3'];
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
}

?>