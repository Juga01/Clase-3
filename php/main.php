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
#Funciones
function suma($a, $b);{
    return $a + $b;
}
#Arrays de texto
$array = array(1,2,3,4,5,6,7,8,9,10);
#Arrays de texto
$array = array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez");
?>