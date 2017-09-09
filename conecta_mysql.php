<?php
    require_once("db_config.php");

    $conexao = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
    if(mysqli_connect_errno()){
        echo "ERRO NA CONEXÃO COM O BANCO DE DADOS. ".mysqli_connect_error();
    }

?>