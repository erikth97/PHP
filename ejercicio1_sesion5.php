<?php
//funciones con arrays
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

    // array_walk: recorre un array, similar a un foreach.  
    array_walk($lugares_turisticos,
        function ($lugares_turisticos, $lugar)
        {
            echo $lugares_turisticos["ciudad"] . "<br>";
        }
    );

?>
