<?php

include_once("conexao2.php");

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
<h1>Confirmação de cadastro</h1>
<?php
if($linhas == 1 ){
        print "Cadastro concluido. Parabêns, Seja bem vindo ao nosso site Mercado delivery";
    }else{
        print"email ou senha invalidos!";
    }
?>
<a href="../vamover/login.php">Fazer login</a>
</body>
</html>