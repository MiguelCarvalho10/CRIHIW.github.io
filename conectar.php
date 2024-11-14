<?php 
$host = "https://sidvugqnlopeaikwlzov.supabase.co";
$port = "3000";
$dbname = "usuarios";
$user = "MiguelCarvalho10";

try {
    $conexao = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida com o Supabase!";
} catch (PDOException $e) {
    echo "Erro de Conexão: " . $e->getMessage();
}
?>

