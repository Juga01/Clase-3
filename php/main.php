<?php
#Sintaxis de PHP
#Tipos de variables

#Enteros
$entero = 10;

#Flotantes
$decimal = 10.5;
#Cadenas
$cadena = "Hola mundo";
#Booleanos
$verdadero = true;
$falso = false;
#Ciclos
# ciclo for
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
    $i++;
}
#Ciclo do while
$i = 0;
do {
    print $i . "<br>";
    $i++;
} while ($i < 10);
#Estructuras de control
if($verdadero){
    echo "Verdaero";
}else{
    echo "Falso";
}
# if anidado
if($verdadero){
    if($falso){
        echo "Verdadero";
    }else{
        echo "Falso";
    }    
}else{
    echo "Falso";
}

?>