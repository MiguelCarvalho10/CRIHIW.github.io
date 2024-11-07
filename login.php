<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
<script src="arquivo.js"></script>
<title>Login</title>
</head>
<body>

<?php
   include "conectar.php"; /* chama o arquivo conectar.php */
?>

<?php

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = MD5($_POST['senha']);

  if (isset($entrar)) {

    $verifica= mysqli_query($conexao, "SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha'") or die ("erro");
      if (mysqli_num_rows($verifica)<=0){
         echo"<script language='javascript' type='text/javascript'>
         alert('LOGIN E SENHA INCORRETOS OU USUÁRIO NÃO CADASTRADO');
         window.location.href='index.php';</script>";
      }else{
          
         echo"<script language='javascript' type='text/javascript'>
         alert('LOGIN EFETUADO COM SUCESSO!');
         window.location.href='home.html';</script>";  
   
      }
  }
?>
</body>
</html>
