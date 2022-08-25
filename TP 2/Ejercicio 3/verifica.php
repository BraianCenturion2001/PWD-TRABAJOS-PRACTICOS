<?php

//Coleccion de usuarios
$usuarios= array(
    array('usuario'=>'Juan', 'clave'=>'mondongo1'),
    array('usuario'=>'Pepe', 'clave'=>'mondongo1'),
    array('usuario'=>'Pedro', 'clave'=>'mondongo1'),
);

$coincide = false;

//Verificacion si el POST recibio algo
if ($_POST){
    $usuario_name=$_POST["name"];
    $usuario_pass=$_POST["password"];

    if(!($usuario_name==$usuario_pass)){
        foreach($usuarios as $usuario){
            if($usuario_name==$usuario['usuario'] && $usuario_pass==$usuario['clave']){
                $coincide=true;
            }
        }
    } else {
        echo "Tu usuario y cotraseña no pueden ser iguales! <br />";
    }

    if($coincide){
        echo "Bienvenido de vuelta! <br />";
        echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
    } else {
        echo "Datos no registrados <br />";
        echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
    }

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
}

?>