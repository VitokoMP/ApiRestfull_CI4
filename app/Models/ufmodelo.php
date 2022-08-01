<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\Controllers\Home_controller;
//use App\Controllers\Home;

class Ufmodelo extends Base_modelo {
    public function __construct() {
		//parent::__construct ();
	}

    var $table = 'uf_historico';
    
    function getUF($campos = null, $where = null, $orderBy = null) {
        
        $query = null;
        
            if (isset ( $campos )) {
                $query = "SELECT " . $campos . " FROM " . $this->table;} else {
                    $query = "SELECT * FROM " . $table;}
                    $query = $query;
                if (isset ( $where )) {
                    $query = $query . ' WHERE ' . $where;}                
                if (isset ( $orderBy )) {
                    $query = $query . ' ORDER BY ' . $orderBy;}
               echo ($query);
        $this->iniciar ();
        $r = $this->consulta ( $query );
        $this->cerrar ();
        return $r;
}


    //insertar valor nuevo UF
    public function insertPersona($params) {
		try {
			$this->iniciar ();
			$this->iniciarTransaccion ();
			
			$query = "INSERT INTO . $table .  (fecha, valor)
				 VALUES (" . $params ['fecha'] . ", '" . $params ['valor'] . "' )";
			
			$result = $this->consulta ( $query );
			if (! $result) {
				printf ( "%s\n", $this->conexion->error );
				exit ();
			}
			
			$id = $this->lastId ();
			
			$this->finalizarTransaccion ();
			$this->cerrar ();
		} catch ( Exception $e ) {
			$this->rollback ();
			echo $e->getMessage () . "\n";
			$this->cerrar ();
			return null;
		}
		
		return $id;
	}

    //Metodo Eliminar Uf
    public function deleteUF($where) {
		$this->iniciar ();
		$query = "DELETE FROM .$table. WHERE " . $where;
		$result = $this->consulta ( $query );
		$this->cerrar ();
		
		if (! $result) {
			printf ( "%s\n", $this->conexion->error );
			exit ();
		}
		
        echo ("Eliminado Satisfactoriamente!");
		return $result;
	}
}