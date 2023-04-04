<?php
//BREAK Y CONTINUE:
// Estas dos palabras son cosas distintas, para englobarlas las podemos llamas como DECLARACIONES, que sirven para modificar un cierto comportamiento y para poder modificar ese comportamiento necesitamos un PUNTO DE CONTROL.(declaracion para modificar un punto de control).
 
//BREAK:   Es una declaracion de interrupcion de una determinada secuencia.
for ($i=0; $i <=20; $i++) { 
    echo "numero: $i</br>";
    if ($i == 16) {
        break;
    }
}
?>
