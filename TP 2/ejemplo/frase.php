<?php

//Verificacion si el GET recibio algo
if ($_GET){
   
    echo "Hola yo soy ".strtoupper($_GET['name']).", ".strtoupper($_GET['apellido'])." tengo ".$_GET['edad']." y vivo en ".strtoupper($_GET['direccion'])."<br>";

    if ($_GET['edad']>=18){
        echo "Y soy Mayor de Edad <br>";
    }else{
        echo "Y soy Menor de Edad <br>";
    }

    switch ($_GET['estudios']) {
        case 'no':
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

    $checked_contador = count($_GET['deportes']);
    echo "Cantidad de Deportes: ".$checked_contador."<br>";
     
    echo "<form action=prueba.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=prueba.html method=''><input type='submit' value='Regresar'></form>";
}

?>