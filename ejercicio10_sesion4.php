<?php
//Pasando argumentos por valores
//En pocas palabras vamos a pasar argumentos por valores en especifico y lo vamos a añadir a nuestras funciones.
// Un argumento representa el valor que se pasa a un parametro. generalemnte no va a formar parte de la funcion, ya que eso lo identifica como un argumento, PERO ese valor lo vemos a pasar precisamente al parametro que mencionamos.

    function nombre_funcion(parametro)

    $contador = 1000;
        function incremento($valor){
                $valor += 1;
                echo $valor."<br>";
        }
        incremento($contador);

?>
