<?php
// array asociativo, en cuanto usamos un array asociativo, donde asignamos un valor a una variable del array, el programa toma el dato de mas alto valor en caso de que la variable se repita, o en caso de que repita variable y el valor solo toma a uno.
 $asociativo = array(
    "maria" => 12,
    "pedro" => 33,
    "juan" => 12
 );
  $asociativo["jeremias"] = 100;
  echo "<pre>";
  var_dump($asociativo);
?>
