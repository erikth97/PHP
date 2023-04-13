<?php
// funciones con arrays
$lugares_turisticos1 = [
    [   
        "precio/noche" => 40,
        "ciudad" => "madrid",
        "Wifi" => true,
    ],
    [
        "precio/noche" => 87,
        "ciudad" => "monterrey",
        "Wifi" => true,
    ],
    [
        "precio/noche" => 120,
        "ciudad" => "madrid",
        "Wifi" => false,
    ],
    [
        "precio/noche" => 140,
        "ciudad" => "madrid",
        "Wifi" => true,
    ]
];

    // filter: obtenemos un array a otro mas pequeño.
    $disponible = array_filter($lugares_turistico,
        function ($lugares_turisticos1){
            return $lugares_turisticos1["ciudad"] == "madrid";
        });

    echo "<pre>";
    var_dump($disponible);

//de esta manera podemos revisar cuales son las opciones de hospedaje para la ciudad de madrid, nos arroja una lista con los datos de cada unos.



?>
