<?php
// clase6_2.php

include_once 'Person.php';

class Empleado extends Person{
    private string $cargo;
    private int $sueldo;

    public function __construct(
        int $id,
        string $nombre,
        int $edad,
        string $documento,
        string $tipo,
        string $cargo,
        int $sueldo
    ){
        parent::__construct($id,$nombre,$edad,$documento,$tipo);
        $this->sueldo = $sueldo;
        $this->cargo = $cargo;

    }
    public function esMayor(): bool{
        return $this->edad >=18;
    }

    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    public function getCargo() : string {
        return $this->cargo;
    }
}