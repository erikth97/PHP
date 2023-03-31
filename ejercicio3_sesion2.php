//Funciones con Arrays. Una funcion nos permite dividir el programa, en tareas mas pequeñas, separadas de la marte principal. Utilizamos unicamente una palabra para llamar a la funcion. en el ejemplo siguiente vamos a eliminar un elemento de un array.
//Para poder modificar un array en cualquier posision que desemos, utilizamos el metodo "array_splice". en los parametros del array agregamos el dato que vamos a eliminar. con una "," separamos al punto de cual a cual vamos a eliminar.
//En el siguiente ejemplo vemos que el metod splice sirve para la aleiminacion de datos en un array.

<?php
$color = array("rojo", "amarillo","azul","verde");
array_slice($color,3);
echo"<pre>";
var_dump($color);
?>
