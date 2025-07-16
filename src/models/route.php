<?php
require_once './src/controllers/ProductoController.php';
require_once './src/controllers/CamperController.php';
require_once './src/factories/ControllerFactory.php';


class Route{
    private string $metodo;
    private string $recurso;
    private array $parametros;

    // , string $recurso, array $parametros
    public function __construct(string $requestUri,string $method)
    {
        $uri = explode('/', trim($requestUri, '/'));
        $this->metodo = strtoupper($method);
        $this->recurso = strtolower($uri[0]);
        $this->parametros = isset($uri[1]) ? array_slice($uri,1): [];
    }

    public function handle(){
        header('Content-Type: application/json');

            $controller = ControllerFactory::create($this->recurso);

            // Este IF, el $funcion y $controller
            if(!array_key_exists($this->metodo,$controller::$dispatch)){
                http_response_code(405);
                echo json_encode(['error' => 'Recurso no encontrado', 'code' => 405, 'errorUrl' => 'https://http.cat/404']);
                exit;
            }



            $funcion = $controller::$dispatch[$this->metodo];

            $controller->$funcion();


            if(!method_exists($controller,$funcion)){
                http_response_code(501);
                echo json_encode(['error' => 'Metodo no implementado', 'code' => 501, 'errorUrl' => 'https://http.cat/501']);
                exit;
            }

            // REALIZAN LAS MISMA OPERACIONES QUE ABAJO 

            // switch ($this->metodo) {
            //     case 'GET':
            //         $controller->get();
            //         break;
                
            //     case 'POST':
            //         $controller->create();
            //         break;
                        
            //     case 'PUT':
            //         $controller->update();
            //         break;

            //     case 'DELETE':
            //         $controller->delete();
            //         break;

            
            //     default:
            //     http_response_code(404);
            //     echo json_encode(['error' => 'Recurso no encontrado',
            //     'code' => 404, 'errorUrl' => 'https://http.cat/404']);    

            //         break;
            // }
        
    }
}