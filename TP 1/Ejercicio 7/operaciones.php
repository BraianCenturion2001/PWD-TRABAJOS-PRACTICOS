<?php

//Verificacion si el GET recibio algo
if ($_GET){

    $n1 = $_GET['numero1'];
    $n2 = $_GET['numero2'];

    $resultado = 0;
   
    switch($_GET['operacion']){
        case 'suma':
            $resultado = $n1 + $n2;
            break;
        case 'resta':
            $resultado = $n1 - $n2;
            break;
        case 'multiplicacion':
            $resultado = $n1 * $n2;
            break;
        case 'division':
            $resultado = $n1 / $n2;
            break;
    }

    echo "Números Ingresados: ".$n1." - ".$n2."<br>";
    echo "Resultado de la ".strtoupper($_GET['operacion']).": ".$resultado."<br>";
     
    echo "<form action=ejercicio7.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=ejercicio7.html method=''><input type='submit' value='Regresar'></form>";
}


?>