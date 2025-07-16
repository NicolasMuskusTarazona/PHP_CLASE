<?php

include_once "../controllers/CrudController.php";
include_once "../controllers/CamperController.php";
include_once "../controllers/ProductoController.php";

class ControllerFactory{
    public static function create(string $path): CrudController
    {
        switch($path){
            case 'producto':
                return new ProductoController();
                break;
            case 'camper':
                return new CamperController();
                break;
            default:
            http_response_code(404);
            echo json_encode(['error' => 'Recurso no encontrado', 'code' => 404, 'errorUrl' => 'https://http.cat/404']);
            exit;
        }
    }
}