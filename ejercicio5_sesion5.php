<?php
//Pasar una Funcion Anonima a Otra Funcion:
// devolver los multiplos de 5 de un array.
//Estructura de Datos:
$numeros = [12,18,5,11,10,95,3];
$multiplos_decinco = array_filter($numeros, function ($n){
    return $n % 5 == 0;
});
echo"<pre>";
print_r($multiplos_decinco);
?>

<?php
//Elementos de mi array se incrementen
$numero = [10,3,4,6,8];
$numero_incremento = array_map(function($nn){
      return $nn + 1;
},$numero);
echo"<pre>";
var_dump($numero_incremento);
?>
