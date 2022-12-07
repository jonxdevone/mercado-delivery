<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../vamover/css_Login.css">
        <title>Login</title>
    </head>
    <body>
		<div id="login">
            <form class="card">
                <div class="card-header">
                    <h2>Seja bem em vindo(a)!</h2>
                </div>
                
				<p>Mercado Digital - Delivery</p>
				
				<div class="card-content">
                    <div class="card-content-area">
                        <label for="email">Escreva seu e-mail </label>
						<input type="text" id="email">
                    </div>
					
                    <div class="card-content-area">
                        <label for="password">Senha</label>
                        <input type="password" id="password">
                    </div>
                </div>

                <div class="card-footer">
				
                    <input id="button" type="button" onclick="event()" value="Entrar">
					
                    <p>Não possui uma conta?<span><a href="../vamover/cadastro.php" > fazer cadastro</a></span>
                </div>
            </form>
		</div>
    </body>
</html>