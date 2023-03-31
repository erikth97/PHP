<?php
//Estructuras de Control
//Operadores de comparacion: entes de tocar el tema vemos un repaso de los operadores

//OPERADORES DE COMPARACION:
---Igual(==)----
devuelve un bool si los valores en ambos lados son iguales. ejem:
5 == 5,  5==5.0
---Identico(===)----
Devuelve verdadero si los valores en ambos lados son iguales. este tiene mas verdad. ejemplo: aqui 5 === 5.0 es false.
---Desigual(!= o <>)----
Devuelve true si los valores en ambos lados no son iguales.
ejemplo: $a = 5 <> 6;    (devuelve true)
---Mayor que(>),  Menor que(<),  Mayor o igual a (>=),  Menor o igual a(<=)
Devuelven un true o flase depende el caso. ejempplo:
$a = 4 <= 4   (true)
$a = 3 <= 4   (true)
---SPACESHIP(<=>)----
Devuelve 0 si los valores en ambos lados son iguales (no necesariamente identicos).
5<=> 5.0
Devuelve 1 si el valor de la izquierda es Mayor.
7<=>5
Devuelve -1 si el valor de la izquierda es Menor.
5<=>7

//OPERADORES LOGICOS
----NOT(!)----
Devuelve true cuando precede a una expresion si es falso
$a = !(5 > 10);      (true)
----AND(&&)----
Nos permite combinar dos comparaciones y devuelve true cuanda ambas comparaciones devuelven verdadero.
$a = 5 > 3  &&  4 < 10;   (true)
----OR(||)--------
Devuelve true cuando al menos una comparacion devuelve true
$a = 5 < 4 || 7 > 5;       (true)

?>
