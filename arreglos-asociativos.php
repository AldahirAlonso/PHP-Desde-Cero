<?php

/*$edades = array(
    "Carlos" => 20,
    "MrMichi" => 18,
    "Juan" => 40
);

echo "La edad de Carlos es: " . $edades["MrMichi"];*/

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 80
);

echo "El precio del cafe Americano es: {$cafes["Americano"]}\n";

$personas = array(

    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),

    "MrMichi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    )
);

echo "La informacion de Mr.Michi es: Edad: " . $personas["MrMichi"]["edad"] . " Apellido: " . $personas["MrMichi"]["apellido"];