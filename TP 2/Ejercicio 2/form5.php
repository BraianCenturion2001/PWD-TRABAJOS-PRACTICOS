<?php

//Verificacion si el GET recibio algo
if ($_GET){

    switch ($_GET['nivel_estudio']) {
        case 'notiene':
            echo "No poseo Estudios <br>";
            break;
        case 'primario':
            echo "Tengo primario completo <br>";
            break;
        case 'secundario':
            echo "Tengo secundario completo <br>";
            break;
    }
    
    echo "Sexo ".strtoupper($_GET['sexo'])."<br>";
     
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
}

?>