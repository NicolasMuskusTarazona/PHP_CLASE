<?php


$tareas = [
    [
        'titulo' => 'Estudiar PHP',
        'estado' => true
    ],
    [
        'titulo' => 'Crear Proyecto en PHP',
        'estado' => false,
        'dificultad' => 6
    ],
    [
        'titulo' => 'Leer la documentacion PHP',
        'estado' => true,
        'duracion' => 3.2
    ],
];
// bool $estado Espera que ponga un valor booleano 
// string $default Espera que ponga un string
// : string Valor de Salida
function mostrarEstado(bool $estado, string $default = 'Completado', string $defaultError = 'Pendiente'): string{
    return $estado ? $default : $defaultError;
}



function mostrarCamper(array $tarea): array
{
    $response =[];
    foreach($tarea as $clave => $valor){
        switch ($clave) {
            case 'estado':
                $response[$clave] = mostrarEstado($valor);
                break;
            case 'duracion':
                $response[$clave] = "{$valor}/h";
                break;
            case 'dificultad':
                $response[$clave] = "{$valor}/10";
                break;
            default:
                $response[$clave] = $valor;
                break;
        }
    }
    return $response;
};

$response =[];
foreach($tareas as $tarea){
    $response[] = mostrarTarea($tarea);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    echo mostrarEstado(true);
    ?>
</body>
</html>