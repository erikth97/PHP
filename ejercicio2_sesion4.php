<?php
//**Funciones Definidas por el Usuario: Son Funciones que nosotros mismos podemos crear para mejorar php. llamandolos por una palabra clave para determinar ciertas acciones.
//la definimos de la siguiente manera:
//function nombre_funcion(parametros);
//Los nombre de las funciones deben de comenzar con una letra o un gion bajo, pero NO con un numero. El nombre de la funcion debe de ser UNICO, no debe de repetirse en otras funciones. El nombre de la funcion NO puede tener espacios. Es una buena practica llamarle a las funciones de formas descriptivas a lo que realiza la funcion.
function saludo($nombre)
{
    echo "hola, $nombre ";
}

// Como llamar a la funcion?, es importante saber que tenemos que colocar en los parametros, de ahi la importancia de nombrar de manera correcta a las funciones, en el ejemplo, no podemos colocar un numero. En el caso del ejemplo la funcion lo que realiza es imiprimir en pantalla, por lo cual cuando lo llamamos es lo que realiza. con "  ´.<br>´ " podemos realizar un salto de linea
saludo("erik"."<br>");
saludo("fabian"."<br>");

function nombre_completo($nombre, $apellido){
    echo "soy $nombre, $apellido";
}
nombre_completo("erik", "tamayo");
?>
