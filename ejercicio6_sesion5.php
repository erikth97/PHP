<?php
//Funciones de Tipo Flecha fn(): las funciones flecha son una forma mas corta de escribir funciones anonimas simples. NO es el reemplazo de las funciones anonimas. unicamente va a emplazarla cuando la funcion es simple o corta.
//Extraer los multiplos de una cantidad de numeros:
$numeros = [12,18,5,11,10,95,3];
$factores = [2,3,5];
foreach ($factores as $factor){
        $multiplos = array_filter($numeros,fn($nnn) => $nnn % $factor == 0);
 echo "multiplos de: $factor";
 echo "<pre>";
 print_r($multiplos);
  }
?>
