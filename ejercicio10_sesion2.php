<?php
//SWITCH
//Un switch tiene diferentes condiciones, cada opcion se le llama "case", cuando el case se cumple se ejecuta ese bloque de codigo. Cuando un case no se cumple o no se encuentra ejecutamos un codigo por defecto, esto para demostrar que funciona todo el case. case = caso1, etc. break = pone el punto final

$curso = "perl";

switch ($curso) {
    case 'java':
        echo "java desde cero";
        break;
    case 'python':
        echo "java desde cero";
        break;
    case 'javadcript':
        echo "java desde cero";
        break;
    case 'dart':
        echo "java desde cero";
        break;
    default:
        echo "no existe, prueba con otro";
        break;
}
?>
