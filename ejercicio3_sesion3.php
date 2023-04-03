<?php
//Ciclo FOREACH
// en este utilizamos un array para el ciclo, con el objetivo de controlar los elementos que lo contienen.
// en la parte de condicion usamos un array, determianando los valores que si se cumplen forman parte a una determinada accion de codigo. 
// Podemos ejecutar cualquier tipo de procedimiento donde todo lo qyue tenemos pasa al segundo punto de control, o en caso de no cummplir el array tendra un codigo de salida que estaria afuera de la estructura repetitiva.
// Basicamente es tomar los elementos ue tenemos al principio y los pasamos al nuevo array de manera temporal, unicamente este array nos ayuda a adicionar un elemento extra que vayamos a adicionar.
// El bucle php foreach se usa para iterar a traves de los valores de los arrays

$animales = array("loro", "perro", "ave", "leon");
foreach ($animales as $array_nuevo) {
    echo $array_nuevo."<br>";
}
?>
