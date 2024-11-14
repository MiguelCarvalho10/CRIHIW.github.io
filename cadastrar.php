<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
<script src="arquivo.js"></script>
<title>Cadastrando Usuários</title>
</head>
<body>

<?php
include 'conectar.php'; // Verifique se a chave está definida aqui
include 'supabase.php'; // Verifique se a chave está definida aqui
// Obtenha os dados do formulário
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$login = $_POST['login'] ?? '';
$senha = $_POST['senha'] ?? ''; 

// Criptografe a senha antes de enviar para o banco
$senha_hash = password_hash($senha, PASSWORD_BCRYPT);

// Dados a serem enviados para a API Supabase
$data = [
    "nome" => $nome,
    "login" => $login,
    "senha" => $senha_hash, // Envie a senha criptografada
    "email" => $email
];

// Configurações para a requisição HTTP com cURL
$url = "https://sidvugqnlopeaikwlzov.supabase.co/storage/v1/s3/usuarios";  // Substitua pelo endpoint da sua tabela
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $supabase_key", // Chave de autenticação
    "Content-Type: application/json",      // Tipo de conteúdo
    "apikey: $supabase_key"                // API key, pode ser necessário em alguns casos
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Executa a requisição
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Obtenha o código HTTP para verificar o status

curl_close($ch);

// Verifica a resposta
if ($http_code === 201) { // 201 Created indica sucesso
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar usuário. Código de resposta HTTP: " . $http_code;
}
?>

</body>
</html>
