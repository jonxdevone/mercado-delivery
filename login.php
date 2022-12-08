<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../vamover/css_Login.css">
        <title>Login</title>
    </head>
    <body>
		<div id="login">
            <form class="card" action="um.php" method="POST">
                <div class="card-header">
                    <h2>Seja bem em vindo(a)!</h2>
                </div>
                
				<p>Mercado Digital - Delivery</p>
				
				<div class="card-content">
                    <div class="card-content-area">
                    <p><label for="lll">Escreva seu e-mail </label><input type="email" name="email" id="lll" size="40" maxlength="60"></p>
                    </div>
					
                    <div class="card-content-area">
                    <label for="sss">Senha </label>
                    <input type="password" name="senha" id="sss" size="15" maxlength="16">
                    </div>
                </div>

                <div class="card-footer">
				
                    <input id="button" type="submit"  value="Entrar">
					
                    <p>Não possui uma conta?<span><a href="../vamover/cadastro.php" > fazer cadastro</a></span>
                </div>
            </form>
		</div>
    </body>
</html>