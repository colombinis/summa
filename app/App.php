<?php
// Ejercicio:
 
// Crear las clases necesarias para administrar los Empleados de una Empresa. Cada empleado puede ser de distinto tipo como ser, Programador, Diseñador.

// Estructura de clases:
// Empresa:
// Id
// Nombre
// Empleados

// Programador:
// Id
// Nombre
// Apellido
// Edad
// Lenguaje en el que programa( pueden ser: PHP, NET o Python  )

// Diseñador
// Id
// Nombre
// Apellido
// Edad
// Tipo de diseñador( pueden ser: Gráfico o Web )

// En Empresa, tengo que poder:
// agregar Empleados
// obtener un listado de todos los Empleados
// buscar por Id y obtener un Empleado
// obtener el promedio de edad de los empleados
// Nota: Demostrar conocimientos en el manejo de objetos, getters, setters, listados y herencia. 

//require __DIR__ . '/../vendor/autoload.php';

class App{

    function run(){
        
        //Creo Empresa
        $id =1;
        $nombre ="Alguna empresa";
        $empresa = new Empresa($id,$nombre);

        //Add programmers
        $this->addProgrammers($empresa);
        
        //Add Designers
        $this->addDesigners($empresa);
                
        
        //get list of empleados and print info
        foreach($empresa->getEmpleados() as $emp){
            echo "\n". $emp->info();
        }
        
        //get empleado by id and print info
        $empresa->getEmpleadoById(1)->info();
                
        //try to get invalid empleado
        try {
            $empresa->getEmpleadoById(10)->info();
        } catch (Exception $exc) {
            App::log( $exc->getMessage() );
        }
        
        //Obtengo promedio de edad
        echo "Promedio edad ". $empresa->getEdadAvg();
    }
    
    private function addProgrammers($empresa){
        //add a few programers
        for($i=0;$i<=3;$i++){
            $prog = new Programador( $i ,"name_{$i}","last_name_{$i}", $i*10 , "PHP");
            $empresa->addEmpleado($prog);
        }
        
        //try to add invalid Programador
        try {
            $prog = new Programador( 99 ,"name_invalid","last_name_invalid", 18 , "invalid language");
            $empresa->addEmpleado($prog);
        } catch (Exception $exc) {
            App::log( $exc->getMessage() );
        }
    }
    
    private function addDesigners($empresa){
        //add a few Designers
        for($i=4;$i<=7;$i++){
            $oE = new Disenador( $i ,"name_{$i}","last_name_{$i}", $i*10 , "Web");
            $empresa->addEmpleado($oE);
        }
        
        //try to add invalid 
        try {
            $oE = new Disenador(99 ,"name_invalid","last_name_invalid", 18 , "invalid type");
            $empresa->addEmpleado($oE);
        } catch (Exception $exc) {
            App::log( $exc->getMessage() );
        }
    }
    
    static function log($msg){
        echo "\n ".date("Ymd_His") ." ". $msg ;
    }
}