<?php
Load::models('municipios');

class MunicipiosController extends AppController
{
    public function index(){
        View::template("pantalla0");
        $this->titulo ="municipio";
        $municipio = new Municipios();
        $this->ListaMunicipio = $municipio->getMunicipios($page);
    }
   
}
?>
