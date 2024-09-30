<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagens/1-ebf92cfd.ico" type="image/x-icon">
    <title>Email</title>
    <link rel="stylesheet" href="Email.css">
</head>

<body onload="fadeIn()">
    <div class="conteiner">
        <div class="testo">

            <h2>Insira <strong class="destaque">Login</strong> e o <strong class="destaque">E-mail</strong> <br>para recuperar a senha</h2>

        </div>

        <form class="conteiner1" action="send.php" method="POST">
            <div class="text1">
                <input class="box-text" type="text" name="usuario" required
                     placeholder="Login"
                    maxlength="25"> <br>
                <input class="box-text" type="text" name="email" required
                    placeholder="E-mail"
                    maxlength="40"><br>
            </div>
            <div class="pbotao">
                <button class="botao" type="submit" name="send">Enviar</button>
            </div>
            <a class="voltarLogin" href="Login.php">Voltar para o login</a>
    </div>
    </form>

    <img class="img" src="./assets/paisagem-de-formacoes-rochosas-naturais.jpg" alt="img">

    <script src="Email.js"></script>
</body>

</html>