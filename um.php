<?php

include_once("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuarios (email,senha) values ('$email', '$senha')";
$cadastrar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>confirme</p>
    <?php
    if($linhas == 1 ){
        print"ERRO:Conta inexistente";
    }else{
        header('Location: index_conta.php');
        die();
    }
    ?>
</body>
</html>