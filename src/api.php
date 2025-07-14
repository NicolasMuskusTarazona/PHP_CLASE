<?php

require_once "src/db.php";
require_once "models/clase5.php";
require_once "models/clase5_2.php";

$persona = new Person('Nicolas Muskus',17,'984121','CC');

$camper = new Camper('Nicolas','984121',17);


function ingresarZonaFranca(Person $persona){
    echo "Ingreso la persona:  {$persona->getNombre()}";
}

ingresarZonaFranca($persona);
ingresarZonaFranca($camper);

exit;
// ----- API ----
$method = $_SERVER['REQUEST_METHOD'];


$uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));


$recurso = $uri[0];
$id = $uri[1] ?? null;

header('Content-Type: application/json');

// EndPoint
if($recurso !== 'products'){
    http_response_code(404);
    echo json_encode(['error' => 'Recurso no encontrado', 'code' => 404, 'errorUrl' => 'https://http.cat/404']);
    exit;
}

switch ($method) {
    case 'GET':
        $stmt = $pdo->prepare("SELECT * FROM products");
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($response);
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $stmt = $pdo->prepare("INSERT INTO products(name,price) VALUES(?,?)");
        $stmt->execute([
            $data['name'],$data['price']
        ]);
        http_response_code(201);
        $data['id'] = $pdo->lastInsertId();
        echo json_encode($data);
        break;
    case 'PUT':
        if (!$id) {
            http_response_code(400);
            echo json_encode(['error' => 'ID no encontrado', 'code' => 400, 'errorUrl' => 'https://http.cat/400']);
            exit;
        }
        $data = json_decode(file_get_contents('php://input'), true);
        $stmt = $pdo->prepare("UPDATE products SET id=?, name=?, price=? WHERE id=?");
        $stmt->execute([
            $data['id'],
            $data['name'],
            $data['price'],
            $id,
        ]);
        echo json_encode($data);
        case 'DELETE':
            if (!$id) {
                http_response_code(400);
                echo json_encode([
                    'error' => 'ID no encontrado',
                    'code' => 400,
                    'errorUrl' => 'https://http.cat/400'
                ]);
                exit;
            }
            $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
            $stmt->execute([$id]);
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if (!$product) {
                http_response_code(404);
                echo json_encode([
                    'error' => 'Producto no encontrado',
                    'code' => 404,
                    'errorUrl' => 'https://http.cat/404'
                ]);
                exit;
            }
            $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
            $stmt->execute([$id]);
            echo json_encode($product);
            break;
    default:
        break;
}