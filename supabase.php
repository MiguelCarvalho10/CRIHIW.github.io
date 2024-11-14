<?php
// URL e chave da API do Supabase
$supabase_url = "https://sidvugqnlopeaikwlzov.supabase.co";  // Substitua pela sua URL do Supabase
$supabase_key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InNpZHZ1Z3FubG9wZWFpa3dsem92Iiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTczMTA4MTc4MiwiZXhwIjoyMDQ2NjU3NzgyfQ.JhcP9VwyRQb28pcFuWSa3fUpjzlcgPYKisDB7Cx3HDg";  // Substitua pela sua API Key

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
