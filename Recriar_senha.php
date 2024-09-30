<?php
session_start();
include_once("Config.php");

if (isset($_POST['Enviar'])) {
    // Recebendo as senhas
    $Senha_1 = $_POST['nova_senha'];
    $Senha_2 = $_POST['nova_senha_conf'];

    // Recebendo o email
    $Usuario = $_SESSION['usuario'];  // O email vem da sessão ou outra fonte válida
    $Email = $_SESSION['email'];
    // Verificando se o email existe no banco de dados
    $stmt = $Conexao->prepare("SELECT * FROM TUSUARIO WHERE LOGIN = ? AND EMAIL = ?");
    $stmt->bind_param("ss", $Usuario, $Email);
    $stmt->execute();
    $Resultado_recriar = $stmt->get_result();

    if ($Resultado_recriar->num_rows > 0) {
        // Validação das senhas
        if ($Senha_1 === $Senha_2) {
            // Atualizando a senha
            $stmt = $Conexao->prepare("UPDATE TUSUARIO SET SENHA = ? WHERE EMAIL = ? AND LOGIN = ?");
            $stmt->bind_param("sss", $Senha_1, $Email, $Usuario);
            if ($stmt->execute()) {
                 echo "<div style='font-family: \"Pirata One\", system-ui; color: black; font-size: 50px; text-align: center; margin-top: 20px; position: absolute; top: 8vh'>
                    Senha alterada com sucesso
                </div>";
                header("Location: Login.php");
                exit();
            } else {
                echo "<div style='font-family: \"Pirata One\", system-ui; color: black; font-size: 50px; text-align: center; margin-top: 20px; position: absolute; top: 8vh'>
                    Erro ao atualizar a senha: " . $stmt->error . "
                </div>";
            }
        } else {
            echo "<div style='font-family: \"Pirata One\", system-ui; color: black; font-size: 50px; text-align: center; margin-top: 20px; position: absolute; top: 8vh'>
                As senhas não coincidem
            </div>";
        }
    } else {
        echo "<div style='font-family: \"Pirata One\", system-ui; color: black; font-size: 50px; text-align: center; margin-top: 20px; position: absolute; top: 8vh'>
            Esse Email não pertence a nenhuma conta
        </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagens/1-ebf92cfd.ico" type="image/x-icon">
    <title>Recuperando a Senha</title>
    <link rel="stylesheet" href="Recriar_senha.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body onload="fadeIn()">
    <div class="conteiner">
        <form action="Recriar_senha.php" method="POST">
            <div class="text">
                <h2 class="recu">Recuperar a senha</h2><br><br><br>
                <input type="password" name="nova_senha" id="nova_senh" required
                    placeholder="Senha"
                    maxlength="40" oninput="senhaValidate()"/>
                <br> <span class="span_required senhasp"> A senha precisa ter no mínimo 6 caracteres</span> <br>
                <input type="password" name="nova_senha_conf" id="nova_senha_con" required
                    placeholder="Confirme a senha"
                    maxlength="40" maxlength="40" oninput="senhaValidate()"/>
                <br><span class="span_required senha2sp"> As senhas não coincidem</span> <br>
            </div>
            <div class="botao">
                <button class="form-botao" type="submit" name="Enviar">Enviar</button>
            </div>
            <div class="olhoAberto">
                <i class="bi bi-eye-fill" id="bt-senha" onclick="OlhoAberto()"></i>
            </div>
            <div class="olhoFechado">
                <i class="bi bi-eye-fill" id="b-senha" onclick="OlhoFechado()"></i>
            </div>
        </form>
    </div>
    <img class="img-backgrund" src="./assets/paisagem-magenta-da-fantasia-da-natureza.jpg" alt="img">
    <script src="Recriar_senha.js"></script>
</body>

</html>