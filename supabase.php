<?php
// URL e chave da API do Supabase
$supabase_url = "https://sidvugqnlopeaikwlzov.supabase.co";  // Substitua pela sua URL do Supabase
$supabase_key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InNpZHZ1Z3FubG9wZWFpa3dsem92Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzEwODE3ODIsImV4cCI6MjA0NjY1Nzc4Mn0.1jHUxTElCeHIAqCGbHvcc2RNruGPzY2DhXJ2c7Gab1Y";  // Substitua pela sua API Key

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
