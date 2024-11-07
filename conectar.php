<?php 
$login = $_POST['login'];
$senha = $_POST['senha'];
$host = "sql305.infinityfree.com";                                      
$user = "if0_37028164";                           
$pass = "9FOeOgPXew";                                     
$banco = "if0_37028164_clientes";                           
$conexao = mysqli_connect($host, $user, $pass, $banco);  
if (!$conexao) {                                          
 echo "Connection Error". PHP_EOL;
 echo "Error Code: ". mysqli_connect_errno().PHP_EOL;
 echo "Error: Description".mysqli_connect_error().PHP_EOL;
 exit;
}
?>
