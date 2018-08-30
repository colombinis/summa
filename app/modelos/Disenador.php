<?php

class Disenador extends Empleado{

    private $valid_tipos = Array('Gráfico', 'Web' );

    
    protected $tipo;

    function __construct($id,$nombre,$apellido,$edad,$tipo){
        
        parent::__construct($id,$nombre,$apellido,$edad);

        $this->setTipo($tipo);
        
    }
    
    public function setTipo($tipo){
        
        if ( !in_array($tipo, $this->valid_tipos) ){
            throw new Exception("El Tipo no es valido");
        }
        
        $this->tipo = $tipo;
    }
}