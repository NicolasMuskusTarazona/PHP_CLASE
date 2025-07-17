<?php

require_once "CamperRepository.php";

class CamperRepositoryJsonImpl implements CamperRepository{
    

    public function findById(int $id) : ?object {
        return (object)[];
    }
    public function getAll() : array {

    }
    public function create(array $data) : ?object {
        $stmt = $this->db->prepare("INSERT INTO campers(nombre,edad,documento,tipo_documento,nive_ingles,nivel_programacion) VALUES(?.?.?.?.?.?)");
        $stmt->execute([
            $data['nombre'],
            $data['edad'],
            $data['documento'],
            $data['tipo_documento'],
            $data['nive_ingles'],
            $data['nivel_programacion'],
        ]);
        if($this->db->lastInsertId() > 0){
            $data['id'] = $this->db->lastInsertId();
        }
        return (object)$data;
    }

    // public function update() : object{
    //     return json_encode('{"Responsable":"Yo"}');
    // }
}