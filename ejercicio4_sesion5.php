<?php
//Funciones Anonimas: Son cerradas y pueden ser declaradas sin nigun nonmbre. No tiene nombre. ¿como la llamamos? a partir de una variable, la cual vamos a depositar la funcion. Hcaemos uso de ella cuando realizamos un procedimiento de manera constante cuando la necesidad lo otorga.
//Forma normal de realizar una funcion:
//function suma ($a,$b){
   // return $a + $b;
//}
//echo suma( a:2,b:6);
//Forma anonima:
$suma = function ($a,$b){
    return $a + $b;
};
echo $suma(10,40)."<br>";
?>

<?php
$variable = function ($x){
    return pow($x, exponent:2 );
};
echo "elevado al cuadrado = ".$variable(4);
