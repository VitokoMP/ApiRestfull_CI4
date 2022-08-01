<?php

    if(isset($_POST['id_registro']) && isset($_POST['fecha']) && isset($_POST['valor']))
    {
        include("../Database/db_connection.php");

        //get values
        $id_registro = $_POST['id_registro'];
        $fecha = $_POST['fecha'];
        $valor = $_POST['valor'];

        $query = "insert into UF_Historico(id_registro,fecha,valor) VALUES($id_registro,$fecha,$valor)";
        if(!$result = mysqli_query($con,$query)){
            exit(mysqli_error($con));
        }
        echo "1 Record Added!";
    }

?>