<?php

/*
 * Se Inicia Sesion
 */
session_start ();

/*
 * Funciones Utiles
 */
function actual_url() {
	/*
	 * $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http"; return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	 */
	return "http://" . $_SERVER ['HTTP_HOST'] . $_SERVER ['REQUEST_URI'];
}

//require 'cargar.php';

/*
 * Declaracion de Modelos En esta seccion deben se�alarse todos los modelos de la aplicacion.
 */

//require 'Models/base_modelo.php'; // Obligatorio
//require 'Models/ufmodelo.php';

/*
 * Declaracion de Controladores. En esta seccion deben se�alarse todos los controladores de la aplicacion.
 */
//require 'controladores/.php'; // Obligatorio

?>