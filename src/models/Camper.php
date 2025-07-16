<?php
// clase5.php

include_once 'Person.php';

// Programacion Orientada a Objetos

class Camper extends Person implements Asistencia{
    public int $skillProgramacion = 0;
    public int $skillIngles = 0;

    public function __construct(string $nombre,string $documento,int $edad,string $tipoDocumento, int $skillIngles, int $skillProgramacion)
    {
        parent::__construct(0,$nombre,$edad,$documento, $tipoDocumento);
        $this->skillIngles = $skillIngles;
        $this->skillProgramacion = $skillProgramacion;
    }

    public function MarcarIngreso(string $metodo) : string{
        return "{$this->nombre} marco el Ingreso con {$metodo}";
    }
    public function MarcarSalida(string $metodo) : string{
        return "{$this->nombre} marco la Salida con {$metodo}";
    }


    public function MarcarAsistencia(){}

    public function MayorEdad() : bool {
        return $this->getEdad()>=18;
    }

    public function ActualizarNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function setNombre(string $nombre) : void {
        if(strlen($nombre)){
            $this->setNombre(htmlspecialchars(trim($nombre)));            
        }else{
            echo "Error al Asignar el nombre al Camper";
        }
    }

    public function getNombre() : string {
        return $this->getNombre();
    }

    public function getDocumento(): string
    {
        return "{$this->tipoDocumento} : {$this->documento}";
    }
    public function informacion() : array {
        return [
            'nombre' => $this -> nombre ?? 'NN', 
            'edad' => $this->edad ?? 0,
            'documento' => $this->documento ?? 'NN',
            'tipoDocumento' => $this->tipoDocumento
        ];
    }
}