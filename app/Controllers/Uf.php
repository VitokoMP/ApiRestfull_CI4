<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
//Clase heredada de modelos
use App\Models\Ufmodelo;
use App\Models\Base_modelo;
//require_once APPPATH.'controllers/home_controller.php';

class Uf extends Controller

{
    
    public function listarUf($params = null) {
        $Uf_modelo = new Ufmodelo();
        $where = "id_registro > 0 ";
        //agregar posibles filtros defecha y rangos.

        //personalizar el where 
        $r = $Uf_modelo->getUF( "id_registro, fecha, valor ", $where );
        $historicos = Array();
        $i = 0;
        while ($row = $r->fetch_assoc ()){
            $historicos [$i] ["id_registro"] = $row ['id_registro'];
            $historicos [$i] ["fecha"] = $row ['fecha'];
            $historicos [$i] ["valor"] = $row ['valor'];
            $i++;
        }
        echo json_encode($historicos);
        return view("recursos/listar", Array("historicos" => $historicos));

	}

    //insertar UF sin validaciones--Revisar
    
	public function agregarUF($params) {
		
		$idRegistro =  $params ["id_registro"] ;
		$params ['fecha'] =  $params ['fecha'];
		$params ['valor'] =  $params ['valor'];
		
		$RegistroHistorico = new Base_modelo ();
		$id = $asociado_modelo->insertPersona ( $params );

		//return view ();
        //$this->redirect ( crearUf);
		echo "1 Record Added!";
		}

    //Elimino UF

    public function eliminarUf($params) {
        
		$RegistroHistorico = new Base_modelo ();
		$RegistroHistorico->deleteUF ( "id_registro = " . $params ["id_registro"] );
        
        return view("recursos/listar");
		
	}
	
}