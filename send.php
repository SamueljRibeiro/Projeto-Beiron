<?php

session_start();
$imagePath = 'assets/paisagem-de-formacoes-rochosas-naturais.jpg';
$Nome = isset($_SESSION['usuario']);
if (isset($_POST['send'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['usuario'] = $_POST['usuario'];
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'andreirigon6@gmail.com';
        $mail->Password = 'nxsy nsbk dwpb ukef';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('andreirigon6@gmail.com', 'Andrei');

        $mail->addAddress($_POST['email']);
        $mail->isHTML(true);
        $mail->Subject = 'Recuperando sua senha - Beiron';


        $mail->Body = '
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="Envio_Email.css" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <img src="cid:paisagem" alt="Paisagem de formações rochosas">
                    <h1>Beiron</h1>
                </div>
                <div class="content">
                    <h2>Olá, Usuário!</h2>
                    <p>Sabemos que até os maiores heróis enfrentam desafios, mas não se preocupe! Aqui está o link para redefinir sua senha e voltar à sua aventura:</p>
                    <a href="http://localhost/projeto/recriar_senha.php" class="btnConfirmar">Redefinir Senha</a>
                    <p>Caso você não tenha solicitado a alteração de senha, ignore este e-mail.</p>
                    <p>Continue firme na sua jornada!</p>
                </div>
                <div class="footer">
                    <p>Obrigado,<br>Equipe Beiron</p>
                </div>
            </div>
        </body>
        </html>';

        // Anexando a imagem para ser usada no e-mail
        $mail->AddEmbeddedImage('assets/Logo-Email-Bemvindo (1)_156x195.png', 'paisagem');
        $mail->send();
        $email = isset($_POSt['email']);
        $usuario = isset($_POSt['usuario']);

        echo "<script>
        alert('E-mail enviado com sucesso. Confira sua Caixa de Entrada do E-mail.');
        document.location.href = 'Email.php';
        </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
