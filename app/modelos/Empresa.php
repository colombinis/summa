<?php

class Empresa
{
    private $id;
    private $nombre;
    private $empleados = Array();
    
    function __construct($id,$nombre){
        $this->id = $id;
        $this->nombre = $nombre;
    }
    
    public function addEmpleado($oEmpleado) {
        $id = $oEmpleado->getId();
        
        if(isset($this->empleados[$id])){
            throw new Exception("Ya existe empleado con id : [{$id}]");
        }
        
        $this->empleados[$oEmpleado->getId()] = $oEmpleado;
    }
    
    
    public function getEmpleados() {
        return $this->empleados;
    }
    
    public function getEmpleadoById($id) {
        if(!isset($this->empleados[$id])){
            throw new Exception("No existe empleado con id : [{$id}]");
        }
        return $this->empleados[$id];
    }
    
    public function getEdadAvg(){
        $cont = count($this->empleados);
        $suma=0;
        if($cont > 0){
            foreach ($this->empleados as $oE) {
                $suma += $oE->getEdad();           
            }
            return  $suma / $cont ;
        }
        
        return false;
    }
}
