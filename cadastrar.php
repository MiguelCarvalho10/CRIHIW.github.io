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

$data = [
    "nome" => $nome,
    "login" => $login,
    "senha" => $senha,
    "email" => $email
];

$options['http']['method'] = "POST";
$options['http']['content'] = json_encode($data);
$context = stream_context_create($options);

$url = "$https://supabase.com/dashboard/project/sidvugqnlopeaikwlzov/database/schemas";
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    echo "Erro ao cadastrar usuário.";
} else {
    echo "Usuário cadastrado com sucesso!";
}
?>

</body>
</html>
