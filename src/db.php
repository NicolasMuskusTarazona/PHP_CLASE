<?php
include_once "config.php";

$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conexion->connect_error) {
    die("Conexion no establecida" . $conexion->connect_error);
}


header("Content-Type: application/json");

$metodo = $_SERVER['REQUEST_METHOD'];

print_r($metodo);


switch ($metodo) {
    case 'GET':
        echo " Consulta de registro - GET";
        consultaSelect($conexion);
        break;
    case 'POST':
        echo " Consulta de registros - POST";
        insertar($conexion);
        break;
    case 'PUT':
        echo " Consulta de registros - PUT";
        break;
    case 'DELETE':
        echo " Consulta de registros - DELETE";
        break;
    default:
        echo "Metodo no permitido ";
        break;
}

function consultaSelect($conexion)
{
    $sql = "SELECT * FROM products";
    $resultado = $conexion->query($sql);

    if ($resultado) {
        $datos = array();
        while ($fila = $resultado->fetch_assoc()) {
            $datos[] = $fila;
        }
        echo json_encode($datos);
    }
}

function insertar($conexion)
{
    $dato = json_decode(file_get_contents('php://input'), true);
    $nombre = $dato['name'];
    $precio = $dato['price'];
    $sql = "INSERT INTO products(name, price) VALUES ('$nombre', $precio)";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        $dato['id'] = $conexion->insert_id;
        echo json_encode($dato);
    } else {
        echo json_encode(array('error' => 'Error al crear usuario'));
    }
    print_r($nombre);
}
