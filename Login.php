<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("Config.php");

if (isset($_POST['Entrar'])) {

  $Login = $_POST['login'];
  $Senha = $_POST['senha'];

  // Conferindo se o Login e a Senha correspondem:
  $stmt = $Conexao->prepare("SELECT * FROM TUSUARIO WHERE LOGIN = ? AND SENHA = ?");
  $stmt->bind_param("ss", $Login, $Senha);
  $stmt->execute();
  $Resultado_Login = $stmt->get_result();

  if ($Resultado_Login->num_rows > 0) {
    // Usuário autenticado com sucesso
     header("Location: incio.php");
    exit();  // Para garantir que o restante do código não seja executado
  } else {
    // Login ou senha incorretos
    echo "<div style='font-family: \"Pirata One\", system-ui; color: red; font-size: 40px; text-align: center; margin-top: 20px; margin-bottom: 20px; position: absolute; top: 8vh,  z-index: 20; transform: translateY(-20px); right: 560px; '>
    Usuário ou Senha incorretos!
  </div>";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Beiron</title>
  <link rel="shortcut icon" href="Imagens/1-ebf92cfd.ico" type="image/x-icon">
  <link rel="stylesheet" href="Login.css">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body onload="fadeIn()">
  <header></header>

  <main class="Apresentaçao">
    <form class="Apresentacao___formaDoFormulario" action="Login.php" method="post">
      <h1 class="Apresentacao____TITULO">
        <strong class="destaqueT">L O G I N</strong>
      </h1>
      <label
        class="Apresentacao___formaDoFormulario___Descriçao"
        for="Usuario"></label>
      <div class="centralizar">
        <input
          class="Apresentacao___formaDoFormulario___Descriçao___Caixa"
          type="text"
          id="nome"
          name="login"
          required
          placeholder="Usuário"
          maxlength="25" />
        <img class="icone img" src="assets/mago24px.png" alt="img" />
      </div>

      <label
        class="Apresentacao___formaDoFormulario___Descriçao"
        for="senha"></label>
      <div class="centralizar">
        <input
          class="Apresentacao___formaDoFormulario___Descriçao___Caixa"
          type="password"
          id="senha1"
          name="senha"
          required
          placeholder="Senha"
          maxlength="25" />
        <div class="icone ie">
          <i class="bi bi-eye-fill" id="icone" onclick="OlhoAberto()"></i>
        </div>
      </div>

      <div class="Poscheckbox">
        <label class="pcheckbox" for=""><input type="checkbox" /> Lembre-me</label>
      </div>

      <div class="PosBotao">
        <button class="botao" id="bt-voltar" type="submit" name="Entrar">Entrar</button>
      </div>

      <div class="PosCadastre">
        <a class="Cadastre" onclick="location.href='cadastrar.php'">Cadastre-se</a>
      </div>

      <div class="PosEsqueSenha">
        <a class="EsqueSenha" href="EMAIL.php">Esqueceu sua senha?</a>
      </div>
    </form>

    <video class="video-background" autoplay muted loop id="video-background">
      <source
        src="video/a_first_person_view_video_of_someone_walking_near_the_ground_in_the_hall_of_the_starting_frame__when_07c889.mp4"
        type="video/mp4" />
    </video>
    <script src="Login.js"></script>
  </main>
  <footer></footer>
</body>

</html>