<?php
echo "Metodo HTTP: ".$_SERVER['REQUEST_METHOD'];
//getEstadisticas('uf', 2019);
//RECIBE
function getEstadisticas($moneda, $anio){
 
switch($_SERVER['REQUEST_METHOD']){
             
             case 'GET':
                 echo " Obteniendo registros ";                
                 $urlAPIMonedaAnio = ('https://mindicador.cl/api/'.$moneda.'/'.$anio);
                 if ( ini_get('allow_url_fopen') ) {
                     $json = file_get_contents($urlAPIMonedaAnio);
                         //echo $json;
                         arrayIndicador($json);
                         //return $json;
                 } else {
                     //De otra forma utilizamos cURL
                     $curl = curl_init($apiUrl);
                     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                     $json = curl_exec($curl);
                     curl_close($curl);
                 }
             break;
 
             }
}    
 
     /*Crear array para Chart*/
 function arrayIndicador($jsonMi) { 
    $arrayIndicadores = json_decode($jsonMi,false);
    print_r ($array->serie[111]);
   
    for ( $i=0; $i < count($arrayIndicadores); $i++):
        
        echo ($arrayIndicadores [$i] ["id_registro"]);
        echo ($arrayIndicadores [$i] ["fecha"]);
        echo ($arrayIndicadores [$i] ["valor"]);
    endfor;
    
             
     } 
   
?>