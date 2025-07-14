<?php

class Person{
    public string $nombre;
    private int $edad;
    protected string $documento;
    protected string $tipoDocumento;

    public function __construct(string $nombre,int $edad,string $documento, string $tipoDocumento){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->documento = $documento;
        $this->tipoDocumento = $tipoDocumento;
    }
    public function setNombre(string $nombre): void{
        $this->nombre = htmlspecialchars(trim($nombre));
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setEdad(int $edad) : void {
        $this->edad = $edad;
    }

    public function getEdad() : int {
        return $this->documento;
    }
    public function getDocumento() : string{
        return $this->documento;
    }
    public function getTipoDocumento() : string {
        return $this->tipoDocumento;
    }
}