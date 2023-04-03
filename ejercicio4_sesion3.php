<?php
//ForEach con Array Asociativo
$alumnos = array(
    "eduardo" => 20,
    "carlos" => 26,
    "ana" => 25,
    "erik" => 24,
    "lalo" => 22
);
foreach ($alumnos as $nuevo_array => $edad) {
    echo $nuevo_array." tiene ".$edad." años ".
    "<br>";
}
?>
