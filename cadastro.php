<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../vamover/css_Cadastro.css">
        <title>Login</title>
    </head>
    <body>
        <div id="cadastro">
        <form method="post" id="formulario" action="processa.php">
                <legend>Identifique-se</legend>

            <p><label for="ppp">Nome </label><input type="text" name="nome" id="ppp" size="40" maxlength="30" placeholder="Nome completo"></p>
            <p><label for="sss">Senha </label><input type="password" name="senha" id="sss" size="15" maxlength="8" placeholder="8 dígitos"></p>
            <p><label for="lll">E-mail </label><input type="email" name="email" id="lll" size="40" maxlength="40" placeholder="E-mail"></p>

                <legend>Sexo</legend>

            <p><input type="radio" name="sexo" id="tsex" checked><label for="cmax">Masculino</label>
            <input type="radio" name="sexo" id="tsexx"><label for="cfem">Feminino</label></p>
            <p><label for="date">Data de nascimento </label><input type="date" name="data" id="date" maxlength="10"></p>

                <legend>Endereço</legend>
            <p><label for="ooo">Logradouro </label><input type="text" name="logradouro" id="ooo" size="35" maxlength="80" placeholder="Rua,Av"></p>
            <p><label for="nnn">Telefone </label><input type="text" name="numero" id="nnn" min="0" size="15" maxlength="12" placeholder="(99)9-999999"></p>
            <p><label for="CES">Estado </label>
            <select name="test" id="CES">
                <optgroup label="">
                <option value="RJ">CE</option>
                </optgroup>
            </select></p>
            <p><label for="iii">Cidade </label><input type="text" name="cidade" id="iii" size="20" maxlength="20" placeholder="Sua cidade"></p>
            <div id="butao">
                <input id="button" type="submit" value="Cadastrar">
            </div>
            </form>
        </div>
    </body>
</html>