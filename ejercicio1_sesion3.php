<?php
//CICLO FOR
//Un ciclo o un bucle es una estructura de control iterativo que implica ejecutar la misma cantidad de codigo varias veces hasta que se cumpla una determinada condicion.
//Esta estructura tendra un valor inicial, el cual dependera del contador (este nos ayuda a identificar los valores que van a ingresar a la condicion), si ese valor cumple la condicion, formara parte del ciclo. lo que ira incrementando la estructura 
// la letra "i" representa incremento. tambien lo podemos relacionar con nuestro contador, ya que vamos a determinar un valor inicial.
// Tenemos 3 "i" en el ciclo for.
//1. i = determinar punto inicial 
//2. i = determinar la condicion
//3. i = como va a funcionar el incremento
//4. {} = cuerpo del ciclo

for ($i=0; $i <= 10; $i++) { 
    echo $i.  "<br>";
}
?>

<?php
for ($i=0; $i <= 10; $i++) { 
    $respuesta = 4 * $i;
    echo "4 x $i = $respuesta.<br>";
}
?>
