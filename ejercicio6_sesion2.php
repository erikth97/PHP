<?php
//Fucionar dos o mas arrays: lo logramos creando un nuevo array y usando el metodo "array_merge(array1,array2);
$num1 = array(1,2,3);
$num2 = array(4,5,6);
$num3 = array(7,8,9);

$final = array_merge($num1,$num2,$num3);
echo"<pre>";
var_dump($final);
?>
