<?php
$servername = "sql305.infinityfree.com"; // Nome do servidor
$username = "if0_37028164"; // Usuário do banco de dados
$password = "9FOeOgPXew"; // Senha do banco de dados
$dbname = "if0_37028164_clientes"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para obter registros
$sql = "SELECT login, email, nome FROM usuarios";
$result = $conn->query($sql);

// Verifica se existem registros e cria uma tabela HTML com eles
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Login</th>
                <th>Email</th>
                <th>Nome</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["login"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["nome"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn->close();
?>
