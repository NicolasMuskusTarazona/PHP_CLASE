<?php 

include_once "CrudController.php";


class CamperController extends CrudController{
    
    public static array $dispatch =[
        "GET" => "get",
        "POST" => "create",
    ];

    public function get(){
        echo json_encode(['response' => 'Recuso producto get']);
    }

    public function create(){
        echo json_encode(['response' => 'Recuso empleado create']);
    }


    public function update(){
        echo json_encode(['response' => 'Recuso empleado update']);
    }

    public function delete(){
        echo json_encode(['response' => 'Recuso empleado delete']);
    }
}