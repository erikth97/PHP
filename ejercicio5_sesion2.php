<?php
//Buscar elementos dentro de un Array: Esto lo podemos realizar con el metod "array_search(numerodeposision,$nombredelarray)" , en caso de que tengamos dos datos repetidos el metodos nos devuelve el primer dato encontrado (numero de posision).
$numeros = array(1,2,3,4,5,6,7,);
echo array_search(5,$numeros);
?>
