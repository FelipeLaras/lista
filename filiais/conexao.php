<?php

    //variaveis para conexao

    $servername = 'localhost';
    $username = 'servopa';
    $password = 'qtbvar03';
    $dbname = 'glpi';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $conn->query("SET NAMES 'utf8'");

    // Check connection
    if ($conn->connect_error) {
        die("Conexão Falhou: " . $conn->connect_error);
    }else{
        //echo "Conexão ON";
    }
	
?>
