<?php
//Introduccir un nuevo dato a nuestro array
$numeros = array(1,2,2,4,5,6,7);
$numeros[] = 100;

echo "<pre>";
var_dump($numeros);
?>

//No pasa nada si repetimos un dato
