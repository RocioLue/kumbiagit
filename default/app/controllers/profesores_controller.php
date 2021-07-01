<?php
class ProfesoresController extends AppController
{
    public function index(){
        View::template('pantalla1');
        $this->titulo ="profesores";
    }
   
    public function historial(){
        View::template('pantalla1');
        $this->titulo ="Historial de profesores";
        
    }
}
?>