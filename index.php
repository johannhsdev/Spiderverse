<?php

$spiderverse = array(

    "1610" => array(
        "Nombre" => "🕸 Miles Morales 🕷",
        "Tierra" => "Tierra-1610",
        "Habilidad especial" => "Habilidad de camuflaje",
        "Ubicacion" => "Brooklyn"
    ),

    "65" => array(
        "Nombre" => "🕸 Gwen Stacy 🕷",
        "Tierra" => "Tierra-65",
        "Habilidad especial" => "Agilidad sobrehumana",
        "Ubicacion" => "Queens"
    ),

    "928" => array(
        "Nombre" => "🕸 Miguel O'Hara 🕷",
        "Tierra" => "Tierra-928",
        "Habilidad especial" => "Lanzamiento de telarañas orgánicas",
        "Ubicacion" => "Nueva York"
    )
);

$tierra = readline("Ingresa el código de la Tierra: ");

if(isset($spiderverse[$tierra])){

    $universo = $spiderverse[$tierra];

    $mensaje = "Has seleccionado: " . $universo['Tierra'] . "\n";
    $mensaje .= "El Spiderman de este universo es:" . "\n";
    $mensaje .= "Spiderman: " . $universo['Nombre'] . "\n";
    $mensaje .= "Habilidad Especial: " . $universo['Habilidad especial'] . "\n";
    $mensaje .= "Ubicacion: " . $universo['Ubicacion'] . "\n";

    echo $mensaje;

} else {

    echo "La Tierra-$tierra no existe en el Spiderverse.";

}