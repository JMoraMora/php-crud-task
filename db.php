<?php 
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "mytasks";
    
    $conn = new mysqli($serverName, $userName, $password, $dbname);

    //Check Connection
    if($conn->connect_error){
        die("Conexion fallida: " . $conn->connect_error);
    }
?>
