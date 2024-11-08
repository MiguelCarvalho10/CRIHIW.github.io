<?php
include 'conexao.php';

$id = $_POST['id'];
$sql = "DELETE FROM clientes WHERE id = $id";

if ($conexao->query($sql) === TRUE) {
    echo "Registro excluído com sucesso!";
} else {
    echo "Erro ao excluir registro: " . $conexao->error;
}

$conexao->close();
?>
