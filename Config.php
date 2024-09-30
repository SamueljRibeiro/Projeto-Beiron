<?php

$Host = 'localhost:3307';
$User = 'root';
$Password = '';
 $DB = 'Beiron';

// Criando a conexão
$Conexao = mysqli_connect($Host, $User, $Password, $DB);

// Validando se a conexão foi bem-sucedida
// if (!$Conexao) {
//     die("Erro na conexão: " . mysqli_connect_error());
// } else {
//     echo "Conexão estabelecida com sucesso!";
// }
