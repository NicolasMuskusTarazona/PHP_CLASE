<?php
$title = "Whelcome to the best Team".PHP_EOL."GROUP ID: A1";
$camper = [
    [
        "nombre" => "Nicolas",
        "apellido" => "Muskus",
        "edad" => 17,
        "grupo" => "A1",
        "skilss" => [
            [
                "nombre" => "Git & Github",
                "score" => 92,
                "matriculado" => false,
            ],
            [
                "nombre" => "MySQL",
                "score" => 76,
                "matriculado" => false,
            ],
            [
                "nombre" => "PHP",
                "score" => 84,
                "matriculado" => false,
            ],
            [
                "nombre" => "Laravel",
                "score" => 0,
                "matriculado" => true,
            ]
        ],
        "score" => 80.1,
    ],
    [
        "nombre" => "Darwin",
        "apellido" => "Machuca",
        "edad" => 19,
        "grupo" => "A1",
        "skilss" => [
            [
                "nombre" => "Git & Github",
                "score" => 70,
                "matriculado" => false,
            ],
            [
                "nombre" => "MySQL",
                "score" => 66,
                "matriculado" => false,
            ],
            [
                "nombre" => "PHP",
                "score" => 94,
                "matriculado" => false,
            ],
            [
                "nombre" => "Laravel",
                "score" => 0,
                "matriculado" => true,
            ]
        ],
        "score" => 76.1,
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Camper</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Camper</h1>
    <div>
        <h2><?= "$title"; ?></h2>
        <br>

        <!-- Espacio BR -->
        <H3 style="color: red;"><?php echo str_replace(PHP_EOL, '<br>',$title);?></H3>
        <br>

        <!-- Es importante usar el " ?= " si no se usa no funciona  -->
        <h3>Campers: <?= count($camper);?></h3>
        <br>
    </div>
    <?php
        for($i = 0; $i < count($camper); $i ++){
            $campers = $camper [$i];
    ?>
    <div>

        <!-- Nombre en mayusculas y Apellido en minusculas -->
        <h2><?= strtoupper($campers['nombre']), " ", strtolower($campers['apellido']);?></h2>
        <br>
        <!--La linea de php tiene que tener -> {} -->
        <!-- <h2 style="color: red ">< echo "Nombre del camper: {$camper[1]['nombre']}";?></h2> -->
    </div>
    <?php
        }
    ?>

    <?php
    foreach ($camper as $campers) {
    echo "<h2>{$campers['nombre']} {$campers['apellido']}</h2>";
    if($campers['edad'] > 18){
        echo "<h3>Viejo : {$campers['edad']}</h3>";
    }else{
        echo "<h3>Menor de edad: {$campers['edad']}</h3>";
    }
    echo "<ul>";
    foreach ($campers['skilss'] as $skill) {
        echo "<li>{$skill['nombre']} - Score: {$skill['score']} - Matriculado: " . ($skill['matriculado'] ? 'Si' : 'No') . "</li>";
    }
    echo "</ul><hr>";
    }
    ?>
</body>
</html>