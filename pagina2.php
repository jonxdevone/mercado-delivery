<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../vamover/css_paginas.css">
    <link rel="stylesheet" type="text/css" href="../vamover/de.css">
    <title>Document</title>
</head>
<body>
<div class="title">
        <h1>Mercado delivery</h1> 
    </div>

    <div class="opcoes">
        <a href="../vamover/login.php" id="sacola">Entrar</a>
        <a href="#" id="sacola">Perfil</a>
        <a href="#" id="sacola">Carrinho</a>
    </div>

    <div class="navegation">
        <div class="search-box">
            <input type="text" class="search-text" placeholder="Pesquisar" max="90">
            <a href="#" class="search-bnt">
                <img src="../vamover/Produtos/lupa.png" alt="Lupa" height="20" width="20">
            </a>
        </div>
    </div>
    <div class="itens">
        <a href="../vamover/pagina.php" id="colunas">doces/recheados/salgadinhos</a>
        <a href="../vamover/pagina2.php" id="colunas">integrais/pós/leites</a>
        <a href="../vamover/pagina3.php" id="colunas">produtos de limpeza</a>
        <a href="../vamover/pagina4.php" id="colunas">temperos/frutas</a>
        <a href="../vamover/pagina5.php" id="colunas">frios</a>
    </div>
    <div class="itens-container">
    <?php
    $itens = array(['image'=>'produtos/arroz 1.jfif', 'nome'=>'achocolatado', 'preco'=>'6.10'],
                   ['image'=>'produtos/arroz 2.jfif', 'nome'=>'nescal', 'preco'=>'4.20'],
                   ['image'=>'produtos/arroz 3.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/macarrão 1.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/macarrão 2.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/macarrão 3.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/feijão 1.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/feijão 2.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/feijão 3.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/café em pó 1.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/café em pó 2.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/café em pó 3.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/leite 1.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/leite 2.jfif', 'nome'=>'tody', 'preco'=>'2.90'],
                   ['image'=>'produtos/leite 3.jfif', 'nome'=>'tody', 'preco'=>'2.90']
    );
    
    foreach ($itens as $key => $value){
    ?> 
        <div class="produto">
          <img src="<?php echo $value['image']?>"/>
          <a href="?adicionar=<?php echo $key ?>">Add ao carrinho</a>
          <p><?php echo $value['nome']?></p>
          <p2>R$ <?php echo $value['preco']?></p2>
        </div>
         
    <?php
    }
    ?> 
    </div>
</body>
</html>