<?php

//Verificacion si el POST recibio algo
if ($_POST){
   
    echo "Hola yo soy ".$_POST['name'].", ".$_POST['apellido']." tengo ".$_POST['edad']." y vivo en ".$_POST['dire'];
    echo "<form action=ejercicio3.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=ejercicio3.html method=''><input type='submit' value='Regresar'></form>";
}

?>