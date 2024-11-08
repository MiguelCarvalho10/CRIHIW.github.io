<?php
include 'conexao.php';

$id = $_POST['id'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE clientes SET login = '$login', senha = '$senha', nome = '$nome', email = '$email' WHERE id = $id";

if ($conexao->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso!";
} else {
    echo "Erro ao atualizar registro: " . $conexao->error;
}

$conexao->close();
?>
