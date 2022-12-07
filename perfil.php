<?php
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from usuarios where nome like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h3>Seus dados:</h3>
    <form method="get" action="">
        Filtrar por nome: <input type="text" name="filtro" class="campo" required autofocus>
        <input type="submit" values="pesquisar" class="bnt">
    </form>
    <?php

    print "$registros Registros encontrados";
    print "<br></br>";

    while($exibirRegistros = mysqli_fetch_array($consulta)){
        $codigo = $exibirRegistros[0];
        $nome = $exibirRegistros[1];
        $senha = $exibirRegistros[2];
        $email = $exibirRegistros[3];
        $data = $exibirRegistros[4];
        $logradouro = $exibirRegistros[5];
        $telefone = $exibirRegistros[6];
        $cidade = $exibirRegistros[7];
        print "<article>";

        print "$codigo<br>";
        print "$nome<br>";
        print "$senha<br>";
        print "$email<br>";
        print "$data<br>";
        print "$logradouro<br>";
        print "$telefone<br>";
        print "$cidade";

        print "</artcle>";
    }

    mysqli_close($conexao);
    ?>
</body>
</html>