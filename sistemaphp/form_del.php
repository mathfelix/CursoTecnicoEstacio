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
		Deletar Usuario
	</title>
		<meta charset="utf-8">
        <link href="cssboot/bootstrap.css" rel="stylesheet">
        <link href="style2.css" rel="stylesheet">
    
        <!-- Chamadas JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-modal.js"></script>
</head>

	<body>

		<?php
		$id=$_REQUEST['id'];
			
			$cpf 	= $_REQUEST['id'];

		?>

		
		<div id="login" class="form bradius">
			
			<form action="delete.php">	
				<br><h1 align="center" class="titulo2">Deletar Usuario</h1><br>
				<br>
				
				<p class="titulo3">Deseja deletar esse usuario?</p><br>
				<p class="titulo3">CPF: <?php echo $cpf; ?></p><input type="hidden" name="cpf" value="<?php echo $cpf; ?>" class="txt4"/>
				<br>
				<center><input type="submit" value="ok" name="op">				
				<input type="submit" value="cancelar" name="op"></center>
			</form>
		</div>
		
	</body>

</html>