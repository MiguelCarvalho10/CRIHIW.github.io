<?php 
$host = "aws-0-sa-east-1.pooler.supabase.com";
$port = "6543";
$dbname = "postgres";
$user = "postgres.sidvugqnlopeaikwlzov";
$password = "iY4z13ozPYN1bVdH";

try {
    $conexao = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida com o Supabase!";
} catch (PDOException $e) {
    echo "Erro de Conexão: " . $e->getMessage();
}
?>

