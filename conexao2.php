<?php

$hostname = "localhost";
$user = "root";
$passowrd = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname,$user,$passowrd,$database);

if(!$conexao){
    print "Falha na conexão com o banco de dados";
}

?>