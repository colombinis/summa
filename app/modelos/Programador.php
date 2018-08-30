<?php

class Programador extends Empleado{
    
    private $valid_languages = Array('PHP', 'NET', 'Python');
    
    protected $language;

    function __construct($id,$nombre,$apellido,$edad,$language){
        
        parent::__construct($id,$nombre,$apellido,$edad);

        $this->setLenguaje($language);
        
    }
    
    public function setLenguaje($language){
        
        if ( !in_array($language, $this->valid_languages) ){
            throw new Exception("El lenguage no es valido");
        }
        
        $this->language = $language;
    }
}