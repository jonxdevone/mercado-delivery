<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mercado Digital</title>
    <link rel="stylesheet" type="text/css" href="vamover/css_perfil.css">
    <link rel="stylesheet" type="text/css" href="vamover/csS.css">
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
    <div class="content">
        <div class="slides">
            <input class="but" type="radio" name="slide" id="slide1" checked>
            <input class="but" type="radio" name="slide" id="slide2">
            <input class="but" type="radio" name="slide" id="slide3">
            <input class="but" type="radio" name="slide" id="slide4">
            <input class="but" type="radio" name="slide" id="slide5">

            <div class="slide s1">
                <img src="../vamover/Produtos/logo.jpg" alt="">
            </div>

            <div class="slide s2">
                <img src="../vamover/Produtos/imagem 1.jpg" alt="">
            </div>

            <div class="slide s3">
                <img src="../vamover/Produtos/imagem 2.jpg" alt="">
            </div>

            <div class="slide s4">
                <img src="../vamover/Produtos/imagem 3.jpg" alt="">
            </div>

            <div class="slide s5">
                <img src="../vamover/Produtos/imagem 4.jpg" alt="">
            </div>

            <div class="mudar">
                <label class="bar" for="slide1"></label>
                <label class="bar" for="slide2"></label>
                <label class="bar" for="slide3"></label>
                <label class="bar" for="slide4"></label>
                <label class="bar" for="slide5"></label>
            </div>
        </div>
    </div>
    <footer>
        <h3>MercadoDelivery&copy;</h3>
    </footer>
</body>
  
</html>