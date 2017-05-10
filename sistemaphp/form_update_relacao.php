<?php
    
    include('includes/conexaodb.php');
    session_start();
 
    if ($_SESSION['loggedin'] != 3) {
 
        header("Location: login.html");
        exit;
    }
 
?>
<html>
	<body>

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


		<?php 			
			$id=$_REQUEST['id'];
			
			$query="SELECT id_atividade FROM alunoxatividade WHERE cpf_aluno='$id'"; 	
			
			// echo $query;
			$recordset = mysql_query($query, $conn);
			if(mysql_num_rows($recordset)==1){
 
				$row 		= mysql_fetch_assoc($recordset);
				$atividade  = $row['id_atividade'];
			}
			else{
				$query="SELECT id_atividade FROM professorxatividade WHERE cpf_professor='$id'"; 	
			
				// echo $query;
				$recordset = mysql_query($query, $conn);

				$row 		= mysql_fetch_assoc($recordset);
				$atividade  = $row['id_atividade'];
			}

		?>

		<div id="login" class="form bradius">
			<form action="update_relacao.php" method="post">
				
				<h1 align="center" class="titulo2">Alterar Dados</h1><br><p class="titulo3">
				<label id="update">CPF: <?php echo $id; ?></label><br>	<center><input type="hidden" name="cpf" value="<?php echo $id; ?>"><br></center>
				<label id="update">Atividade:</label><br>	<center><input type="text" name="atividade" value="<?php echo $atividade; ?>"><br></center>
				<br>
				<center><input type="submit" class="sb bradius" value="Confirmar"><input type="submit" action="menuadm.php" value="Voltar"></center>
			</form>
		</div>
	</body>
</html>