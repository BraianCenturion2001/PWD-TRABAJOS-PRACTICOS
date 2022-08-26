<?php

//Verificacion si el GET recibio algo
if ($_GET){
   
    $checked_contador = count($_GET['deportes']);
    echo "Cantidad de Deportes: ".$checked_contador."<br>";
     
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
}

?>