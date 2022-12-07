<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$nascimento = $_POST['data'];
$email = $_POST['email'];
$logradouro = $_POST['logradouro'];
$telefone = $_POST['numero'];
$cidade = $_POST['cidade'];

$sql = "insert into usuarios (nome,senha,nascimento,email,logradouro,telefone,cidade) values ('$nome','$senha','$nascimento','$email','$logradouro','$telefone','$cidade')";
$Cadastrar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
</head>
<body>
    <h3>cadastrados:</h3>
    <?php
    if($linhas == 1){
        print 'Cadastrado com sucesso!!';
    }
    else{
        print 'Já existe alguem com os mesmos dados!';
    }
    ?>

</body>
</html>
