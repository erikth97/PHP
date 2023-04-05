<?php
//Ingrese 2 valores:
        $valor1 = 10;
        $valor2 = 2;

//Ingresa el tipo de operacion que deseas: 
    $operacion = "divicion";

    function suma($val1, $val2){
        $resultado = $val1 + $val2;
        return $resultado;
    }

    function resta($val1, $val2){
        $resultado = $val1 - $val2;
        return $resultado;
    }
    function multiplicacion($val1, $val2){
        $resultado = $val1 * $val2;
        return $resultado;
    }
    function divicion($val1, $val2){
        $resultado = $val1 / $val2;
        return $resultado;
    }
// Trabajando con el mismo ejemplo pasado, en este caso agregamos la estructura "switch", con el fin de que seas mas facil para el usuario seleccionar la operacion que desea realizar (case).

    switch ($operacion){
        case 'suma':
            $resultado = suma($valor1,$valor2);
            break;
        case 'resta':
                $resultado = resta($valor1,$valor2);
            break;
        case 'multiplicacion':
            $resultado = multiplicacion($valor1,$valor2);
            break;
            case 'divicion':
                $resultado = divicion($valor1,$valor2);
            break;

    }
    echo "CALCULADORA CON FUNCIONES<br>";
    echo "tipo de operacion $operacion<br>";
    echo "la respuesta es: $resultado";
?>
