<?php
//CONTINUE:     Es una declaracion que no hace que un bucle termine prematuramente. En cambio, hace que se omita el resto del ciclo. (Es como hacer un salto, obmita alguna parte de la accion del codigo)
for ($i=0; $i <= 16; $i++) { 
    if ($i == 8) {
        continue;
    }
    echo "numero: $i</br>";
}
?>
