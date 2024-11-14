<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
<script src="arquivo.js"></script>
<title>Cadastrando Usuarios</title>
</head>
<body>

<?php
include 'supabase.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografe a senha
$email = $_POST['email'];

// Dados a serem enviados
$data = [
    "nome" => $nome,
    "login" => $login,
    "senha" => $senha,
    "email" => $email
];

// Adicione o cabeçalho e o método POST para enviar os dados
$options = [
    "http" => [
        "header" => [
            "Authorization: Bearer $supabase_key",
            "Content-Type: application/json"
        ],
        "method" => "POST",
        "content" => json_encode($data)
    ]
];

$context = stream_context_create($options);

// Altere a URL para o endpoint correto
$url = "https://sidvugqnlopeaikwlzov.supabase.co/rest/v1/usuarios";  // Substitua pelo nome da sua tabela

$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    echo "Erro ao cadastrar usuário.";
} else {
    echo "Usuário cadastrado com sucesso!";
}
?>


</body>
</html>
