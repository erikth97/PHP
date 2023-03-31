<?php
//Ordenar un Arrays: 
//Ordenar de menos a mayor:para lograr esto usamos el metodo "asort($arrayquequeremosordenar);"
//Ordenar de mayor a menor :para lograr esto usamos el metodo "rsort($arrayquequeremosordenar);" 
//Cuando mofidicamos un array con el ultimo metodo cambia su numero de posicion, con el metodo "arsort" logramos que mantenga su mismo valor y numero de posision original, pero de forma en que queramos que se ordene.


$num1 = array(1,2,3);
$num2 = array(4,5,6);
$num3 = array(7,8,9);

$final = array_merge($num1,$num2,$num3);
asort($final);
echo "<pre>";
var_dump($final);



?>
