<?php

class Empleado{
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $edad;

    function __construct($id,$nombre,$apellido,$edad){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad ;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }
    
    public function info()
    {
        return "INFO :: Nombre->{$this->nombre} Edad->{$this->edad}";
    }
    
    
    
}