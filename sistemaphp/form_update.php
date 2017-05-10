<?php
    
    include('includes/conexaodb.php');
    session_start();
 
    if ($_SESSION['loggedin'] != 3) {
 
        header("Location: login.html");
        exit;
    }
 
?>
<html>
	<head>
		<title>
			Atualizar dados
		</title>
		<meta charset="utf-8">
        <link href="cssboot/bootstrap.css" rel="stylesheet">
        <link href="style2.css" rel="stylesheet">
    
        <!-- Chamadas JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-modal.js"></script>
		
		<script type="text/javascript">
		   function Mascara(obj, funcao)
		   {
		    vObj = obj;
		    vFun = funcao;

		    setTimeout('execMascara()', 1);
		   }

		   function execMascara()
		   {
		    vObj.value = vFun(vObj.value);
		   }
		   function Cpf(v)
		   {
		    v = v.replace(/\D/g,''); // Remove tudo que não for digito
		    v = v.replace(/(\d{3})(\d)/,'$1.$2');
		    v = v.replace(/(\d{3})(\d)/,'$1.$2');
		    v = v.replace(/(\d{3})(\d)/,'$1-$2');

		    return v;

		   }
		   function Telefone(v)
		   {
		    v = v.replace(/\D/g,'');
		    v = v.replace(/^(\d\d)(\d)/g,'($1) $2');
		    v = v.replace(/(\d{4})(\d)/,'$1-$2');

		    return v;
		   }
		   function Data(v)
		   {
		    v = v.replace(/\D/g,'');
		    v = v.replace(/^(\d{2})(\d)/, '$1/$2');
		    v = v.replace(/(\d{2})(\d)/, '$1/$2');

		    return v;
		  }
	</script>

	</head>

	<body>

		<?php 			
			$id=$_REQUEST['id'];
			$query="SELECT cpf, nome, data, sexo, email, telefone, senha 
					FROM aluno WHERE cpf='$id'"; 	
			
			// echo $query;
			$recordset = mysql_query($query, $conn);
			if(mysql_num_rows($recordset)==1){
 
				$row 		= mysql_fetch_assoc($recordset);
				$cpf 		= $row['cpf'];
				$nome 		= $row['nome'];
				$nascimento = $row['data'];
				$sexo 		= $row['sexo'];
				$email 		= $row['email'];
				$telefone 	= $row['telefone'];
				$senha 		= $row['senha'];
			}
			else{
				$query="SELECT cpf, nome, data, sexo, email, telefone, senha 
					FROM professor WHERE cpf='$id'"; 	
			
				// echo $query;
				$recordset = mysql_query($query, $conn);

				$row 		= mysql_fetch_assoc($recordset);
				$cpf 		= $row['cpf'];
				$nome 		= $row['nome'];
				$nascimento = $row['data'];
				$sexo 		= $row['sexo'];
				$email 		= $row['email'];
				$telefone 	= $row['telefone'];
				$senha 		= $row['senha'];
			}

		?>
		<div id="cadastrar"><a href="menuadm.php" title="Painel"> &laquo; Painel </a></div><br>

		<div id="login" class="form bradius">
			<form action="update.php" method="post">
				<input type="hidden" name="id" value="<?php echo "Usuario '$id'"; ?>"><br>
				<h1 align="center" class="titulo2">Alterar Dados</h1><br><p class="titulo3">
				<label id="update">CPF: <?php echo $cpf; ?></label><br>	<center><input type="hidden" name="cpf" value="<?php echo $cpf; ?>" class="txt4"><br></center>
				<label id="update">Nome:</label><br>		<center><input type="text" name="nome" value="<?php echo $nome; ?>" class="txt4 "><br></center>
				<label id="update">Nascimento:</label><br>	<center><input type="text" name="data" value="<?php echo $nascimento; ?>" maxlength="10" onkeypress="Mascara(this, Data)" class="txt4 "><br></center>
				<label id="update">Sexo:</label><br>		<center><input type="text" name="sexo" value="<?php echo $sexo; ?>" class="txt4 "><br></center>
				<label id="update">Email:</label><br>		<center><input type="text" name="email" value="<?php echo $email; ?>" class="txt4 "><br></center>
				<label id="update">Telefone:</label><br>	<center><input type="text" name="telefone" value="<?php echo $telefone; ?>" maxlength="14" onkeypress="Mascara(this, Telefone)" class="txt4 "><br></center>
				<label id="update">Senha:</label><br>		<center><input type="text" name="senha" value="<?php echo $senha; ?>" class="txt4 "><br></center>
				</p>
				<br>
				<center><input type="submit" class="sb bradius" value="Confirmar">
				<input type="submit" action="menuadm.php" value="Voltar"></center>
			</form>
		</div>
	</body>
</html>