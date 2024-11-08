<?php
// URL e chave da API do Supabase
$supabase_url = "https://seu-supabase-url.supabase.co";  // Substitua pela sua URL do Supabase
$supabase_key = "sua-api-key";  // Substitua pela sua API Key

// Configurações do cabeçalho para a API
$options = [
    "http" => [
        "header" => [
            "Authorization: Bearer $supabase_key",
            "Content-Type: application/json"
        ]
    ]
];

$context = stream_context_create($options);
?>
