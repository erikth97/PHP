<?php
//Map: transforma el contenido de un array pero mentiene el numero de elementos.podemos modificar alguna condiciones de nuestro array sin perdelo o eliminarlo. en este ejemplo realizamos una promocion en los precios de los destinos.
$lugares_turisticos = [
    [   
        "precio/noche" => 40,
        "ciudad" => "madrid",
        "Wifi" => true,
    ],
    [
        "precio/noche" => 87,
        "ciudad" => "londres",
        "Wifi" => true,
    ],
    [
        "precio/noche" => 120,
        "ciudad" => "los angeles",
        "Wifi" => false,
    ],
    [
        "precio/noche" => 140,
        "ciudad" => "monterrey",
        "Wifi" => true,
    ]
];

$promocion = array_map(function($lugares_turisticos)
        {
            return array_merge($lugares_turisticos,
             ["precio/noche" => $lugares_turisticos["precio/noche"]/2]);
        },$lugares_turisticos );

echo "<pre>";
var_dump($promocion);

?>
