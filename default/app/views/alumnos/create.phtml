<?php

Load::models('alumnos');
class AlumnosController extends AppController
{

    public function index($page=1) {
        // $this->fecha=date("Y-m-d");
        // $this->nombre=$nombre ;

        view::template("pantalla1");
        $this->titulo = "Listado alumnos";
        $alumno = new Alumnos();
        $this->listaAlumnos = $alumno->getAlumnos($page);
    }

    public function findbyid($id){
        $alumno = new Alumnos();
        $this->listaAlumno = $alumno->getDatos($id_alumnos);
    }

     //BOTON DE CREAR UN REGISTRO
    public function registro () {
        if (Input::hasPost('alumnos')){
            $alumno = new Alumnos(Input::post('alumnos'));
            if ($alumno->create()){
                Flash::valid('Operación exitosa');
                Input::delete();
                return Redirect::to();
            }else{
                Flash::error ('Fallo Operación');
            }
        }

        view::template("pantalla1");
        $this->titulo = "Registro de alumnos";
    }

     //BOTON DE EDITAR UN REGISTRO
     public function edit($id_alumnos){
         View::template('pantalla1');
         $alumno = new Alumnos ();
         if(Input::hasPost('alumnos')){
             if(!$alumno->update(Input::post('alumnos'))){
                Flash::error("No se actualizo el registro");
             } else{
                Flash::valid("Datos del alumnos actualizado");
                return Redirect::to();
             }
         } else {
             $this->alumnos = $alumno->find((int)$id_alumnos);
         }
     }

     //BOTON DE ELIMINAR UN REGISTRO
     public function del($id_alumnos){
         $alumno = new Alumnos();
         if (!$alumno->delete((int)$id_alumnos )){
            Flash::valid('Operación exitosa');
         } else {
            Flash::error ('Fallo Operación');  
         }
         //Enrutando por defecto al index del controller
         return Redirect::to();
     }
}

?>