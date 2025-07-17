<?php
include_once "CrudController.php";

class CamperController extends CrudController
{
    public static array $dispatch = [
        "GET" => "get",
        "POST" => "create",
        "DELETE" => "delete"
    ];

    public function get()
    {
        echo json_encode(['response' => 'Recurso camper get desde el controller']);
    }

    public function create()
    {
        echo json_encode(['response' => 'Recurso camper create']);
    }

    public function update()
    {
        echo json_encode(['response' => 'Recurso camper update']);
    }
}