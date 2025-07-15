<?php

class Route
{
    private string $metodo;
    private string $recurso;
    private array $parametros;

    // , string $recurso, array $parametros
    public function __construct(string $requestUri,string $method)
    {
        $uri = explode('/', trim($requestUri, '/'));
        $this->metodo = $method;
        $this->recurso = $uri[0];
        $this->parametros = $uri;
    }

    public function handle(){
        header('Content-Type: application/json');
        switch($this->recurso){
            case 'products':
                echo json_encode([]); 
                break;
            case 'camper':
                break;
            case 'invitado':
                break;
            case 'empleado':
                break;
            default:
            http_response_code(404);
            echo json_encode(['error' => 'Recurso no encontrado', 'code' => 404, 'errorUrl' => 'https://http.cat/404']);
            exit;
            break;
        }
    }
}