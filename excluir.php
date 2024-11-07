<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
<script src="arquivo.js"></script>
			<title>Resultado da pesquisa</title>
		</head>
<body>
<?php
   include "conectar.php"; /* chama o arquivo conectar.php */
?>

<?php
   
   
   $email = $_POST["email"]; /* Cria uma variavel para receber o campo email enviado pelo POST */
  
   $sql= mysqli_query($conexao, "SELECT * FROM usuarios WHERE email LIKE '%".$email."%' "); /* Procura na tabela usuarios por um campo de email igual a variavel $email */
   	
  
   	
	$row = mysqli_num_rows($sql);
	if($row > 0) {
	    while($linha = mysqli_fetch_array($sql)) {
		      echo "<p>";
		      $nome = $linha['nome'];
			  $login = $linha['login'];
			  $email = $linha['email'];
			  echo "<strong>Nome:</strong>".@$nome;
			  echo "<p>";
              echo "<strong>Login:</strong>".@$login;
			  echo "<p>";
              echo "<strong>Email:</strong>".@$email;
              echo "<p>";
             
		}
        ?>				
		<form name='dados' action='?a=ok' method='POST'>
		    <input type="submit" name="Deletar" title="Deletar" value="Deletar"  />
        </form>		
		<?php	
		if ( isset( $_GET['a'] ) && $_GET['a'] == 'ok' )  {

		 $sql1=  mysqli_query($conexao, "DELETE  FROM usuarios WHERE email LIKE '%".$email."%' ") or die("Registro não deletado!");
		      
		      
		     
		                                   
	       if ($sql1) { //se $sql1 receber um verdadeiro
	           
			  ?>
			   <script language="JavaScript"> // fecha o php, abre um java e chama um alert
			       alert("Registro deletado!");
			       window.history.go(-2);  // Volta duas páginas que foram carregadas no navegador
                      
                </script> 
              <?php
                          
                       } 
		}          
	
        } else {
	          echo "Usuário não encontrado!"; 
	          ?>
			   <script language="JavaScript"> 
			       alert("Registro não encontrado!");
			       window.history.go(-1);   // Volta para a página anterior
                      
                </script> 
              <?php
	    }
	    
	   //fecha conexão
       mysqli_close($conexao);
       ?>



</body>
</html>