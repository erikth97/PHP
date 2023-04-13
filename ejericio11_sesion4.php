<?php
// PASANDO ARGUMENTOS POR REFERENCIA
// Definimos una funcion y una determinada operacion va a ser precisamente que ocupe un papel fundamental al momento de pasar datos a nuestra funcion.
$contador = 1000;
function incremento(&$valor){
    $valor += 1;
    echo $valor."<br>";
}
incremento(&$valor:$contador);
echo $contador;

?>
