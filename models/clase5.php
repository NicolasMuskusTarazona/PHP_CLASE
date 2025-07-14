<?php

include_once 'clase5_2.php';
// Programacion Orientada a Objetos

class Camper extends Person{

    public int $nivelIngles = 0;

    public function __construct(string $nombre,string $documento,int $edad, int $nivel = 0)
    {
        $this->documento = $documento;
        $this->setEdad($edad);
        $this->setNombre($nombre);
        $this->nivelIngles = $nivel;
        echo "Hola desde el Constructor<br>";
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