<?php
include 'supabase.php';

$url = "$supabase_url/rest/v1/usuarios?select=*";
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    echo "Erro ao buscar dados.";
} else {
    $usuarios = json_decode($response, true);
    foreach ($usuarios as $usuario) {
        echo "Nome: " . $usuario['nome'] . "<br>";
        echo "Login: " . $usuario['login'] . "<br>";
        echo "Email: " . $usuario['email'] . "<br><br>";
    }
}
?>
