<?php

$db_conn = mysqli_connect("localhost", "root", "", "php_crud");

// Evaluate the connection
if (mysqli_connect_errno())
{
    echo mysqli_connect_error();
    exit();
}

else
{
    echo "Successful database connection, happy coding!!!";
    
};

class Root_modelo {
	// Local
	/*
	 * private $host= "localhost"; private $user= "root"; private $password =""; private $database="corebox_tiedesa";
	 */

	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "intranet-telefonica";
	
	protected $conexion = null;
	public function __construct() {
	}
	public function cerrar() {
		$this->conexion->close ();
	}
	public function iniciar() {
		$this->conexion = new mysqli ( $this->host, $this->user, $this->password, $this->database );
		$this->conexion->set_charset("utf-8");
		if ($this->conexion->connect_error) {
			die ( "Error en la conexion : " . $this->conexion->connect_errno . "-" . $this->conexion->connect_error );
		}
	}
	public function iniciarTransaccion() {
		$this->conexion->autocommit ( FALSE );
	}
	public function finalizarTransaccion() {
		$this->conexion->commit ();
		$this->conexion->autocommit ( TRUE );
	}
	public function consulta($consulta) {
		$result = $this->conexion->query ( $consulta );
		if (!$result) {
			printf ( "Connect failed: %s\n", $this->conexion->error );
			exit ();
		}
		return $result;
	}
	
	/**
	 * Implementacion de mysqli->multi_query();
	 * @param array $statements Consultas en formato Array("CONSULTA1", "CONSULTA2",...)
	 */
	public function consultasMultiples($statements) {
		if ($this->conexion->multi_query(implode(';', $statements))) {
			$i = 0;
			do {
				$i++;
			}	while ($this->conexion->more_results() && $this->conexion->next_result());
			
		}
		if ($this->conexion->errno) {
			echo "Batch execution prematurely ended on statement $i.\n";
			var_dump($statements[$i], $this->conexion->error);
			exit ();
		}
	}
	public function lastId() {
		return $this->conexion->insert_id;
	}
	public function rollback() {
		$this->conexion->rollback ();
	}
}

        
   

?>