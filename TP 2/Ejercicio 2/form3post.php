<?php

//Verificacion si el POST recibio algo
if ($_POST){
   
    echo "Hola yo soy ".$_POST['nombre3'].", ".$_POST['apellido3']." tengo ".$_POST['edad3']." y vivo en ".$_POST['direccion3'];
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
}

?>