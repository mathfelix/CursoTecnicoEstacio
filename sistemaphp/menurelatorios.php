<?php
    
    include('includes/conexaodb.php');
    session_start();
 
    if ($_SESSION['loggedin'] != 1) {
 
        header("Location: index.php");
        exit;
    }
 
?>
<html>
	<head>
		<title>
			Menu Relatorios (Administrador)
		</title>
		
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
	</head>

		<body>
			<div id="cadastrar"><a href="menuadm.php" title="Faça login"> &laquo; Menu </a></div>
			<div id="login" class="form bradius">
			     
			     <h1 align="center" class="titulo2">Escolha o relatorio:</h1><br>

			        <center>
			            <form action="form_relcpf.php">
			            <input type="submit" class="sb bradius" class="titulo" value="cpf" name="CPF"/> 
			            </form>
			            
			            <form action="form_relnome.php">
			            <input type="submit" class="sb bradius"  class="titulo" value="nome"/>
			            </form>
			            
			            <form action="form_relnascimento.php">
			            <input type="submit" class="sb bradius"  class="titulo" value="data" name="Nascimento"/>
			        	</form>

			            <form action="form_relsexo.php">
			            <input type="submit" class="sb bradius"  class="titulo" value="sexo" name="Sexo"/>
			        	</form>

			        	<form action="form_relemail.php">
			            <input type="submit" class="sb bradius"  class="titulo" value="email" name="Email"/>
			        	</form>

			        	<form action="form_reltelefone.php">
			            <input type="submit" class="sb bradius"  class="titulo" value="telefone" name="Telefone"/>
			        	</form>

			        	<form action="form_relsenha.php">
			            <input type="submit" class="sb bradius"  class="titulo" value="senha" name="Senha"/>
			        	</form>			        
			        </center>


			</div>
		</body>

</html>