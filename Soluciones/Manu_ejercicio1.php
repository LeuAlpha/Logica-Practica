<?php
/* Ejercicio 1: 
    Tenemos una LISTA de pacientes que se han registrado en la sala de emergencias de un hospital.
    Vamos a ordenar esos pacientes por dos criterios:

    - Numero de turno (orden ascendente) - NUMERO ENTERO 
    - Gravedad del paciente (orden ascendente) - NUMERO ENTERO

    ** Datos de Entrada:
    [
     {
        "nombre": "Juan Perez",
        "turno": 3,
        "gravedad": 2
    },
    {
        "nombre": "Ana Gomez",
        "turno": 1,
        "gravedad": 3
    },
    {
        "nombre": "Luis Torres",
        "turno": 2,
        "gravedad": 1
    }
    ]
*/

function ordenarPacientesConBubble($arr, $criterio){
    if(count($arr) <= 1 ) return "Dame un array con cositas para ordenar.";

    for($i = 0; $i < count($arr); $i++){
        for($j = 0; $j < count($arr) - 1; $j++){
            if($arr[$j][$criterio] > $arr[$j + 1][$criterio]){
              
                // Intercambiar los elementos
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

function ordenarPacientesConInsertion($arr, $criterio){
    if(count($arr) <= 1 ) return "Dame un array con cositas para ordenar.";

    for($i = 1; $i < count($arr); $i++){
        $aux = $arr[$i];
        $j = $i - 1;

        while($j >= 0 && $arr[$j][$criterio] > $aux[$criterio]){
            $arr[$j + 1] = $arr[$j];
            $j--;
        }

        $arr[$j + 1] = $aux;
    }

    return $arr;
}

// Datos de prueba:
$pacientes = [
    [
        "nombre" => "Juan Perez",
        "turno" => 3,
        "gravedad" => 2
    ],
    [
        "nombre" => "Ana Gomez",
        "turno" => 1,
        "gravedad" => 3
    ],
    [
        "nombre" => "Luis Torres",
        "turno" => 2,
        "gravedad" => 1
    ]
];

// Ejemplo por turno usando Bubble Sort
$resultadoBubble = ordenarPacientesConBubble($pacientes, "turno");

// Ejemplo por gravedad usando Insertion Sort
$resultadoInsertion = ordenarPacientesConInsertion($pacientes, "gravedad");

echo "<pre>Bubble Sort por turno:\n";
print_r($resultadoBubble);

echo "\nInsertion Sort por gravedad:\n";
print_r($resultadoInsertion);
echo "</pre>";

?>
