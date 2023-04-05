<?php
//Calculadora con 2 numeros, desarrollada mediante funciones. Es bueno mentener los nombres de los parametros en las funciones de un mismo programa, aunque sean funciones diferentes como en el ejemplo sigueiente. aclarando que las variables no pueden tener el mismo nombre que el de las funciones o de los parametros.

$valor1 = 6;
$valor2 = 10;
function suma($val1, $val2){
      $resultado = $val1 + $val2;
      return $resultado;
}

function resta($val1, $val2){
    $resultado = $val1 - $val2;
    return $resultado;
}
function multiplicacion($val1, $val2){
    $resultado = $val1 * $val2;
    return $resultado;
}
function divicion($val1, $val2){
    $resultado = $val1 / $val2;
    return $resultado;
}
echo multiplicacion($valor1,$valor2)
?>
