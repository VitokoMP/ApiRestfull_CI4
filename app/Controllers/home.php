<?php
namespace App\Controllers;
// Super controlador del que heredan los otros controladores del sistema.
class Home
{
    protected $cargar;
    protected $params;

   // return view("recursos/listar");

    /*
    public function cargarVista($vista, $data = null) {
        // $vista = 'recursos/listar';
        // $this->cargar->vista ( "inc/head" );
        // $this->cargar->vista ( "inc/header" );
         //$this->cargar = new Cargar();
         if (is_array ( $data )) {
             //$this->cargar->vista ( $vista, $data );
             return view($vista,$data);
         } else {
            // $this->cargar->vista ( $vista );
             return view($vista);
         }
        // $this->cargar->vista ( "inc/footer" );
        
        //echo ($this->cargar->vista('listar',null));
     }*/
}
