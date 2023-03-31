<?php
//Estructuras de Control
//Estas son usadas cuando queremos que se ejecute una accion en caso de que la condicion se cumpla o no.
//---IF----
//Funciona simpre y cuando la condicion se cumpla. (ture)
//---ELSE---
//En caso de no cumplir las condiciones que se dieron en los parametros se ejecuta esta otra opcion. este ya solo se agregan llaves {condicion}, y no una condicion en ()
//----ELSEIF----


$erik = 25;
$alonso = 25;

if ($erik > $alonso) {
    echo "$erik es mayor a $alonso";
}    
elseif ($erik == $alonso) {
    echo "$erik es igual a $alonso";
}

else {
    echo "$erik es menor a $alonso";
}
?>
