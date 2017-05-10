<?php
    
    include('includes/conexaodb.php');
    session_start();
 
    if ($_SESSION['loggedin'] != 1) {
 
        header("Location: login.html");
        exit;
    }
 
?>
<html>
	<head>
		<title>
			Menu
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

			<div class="container">
				<div id="back"><a href="logout.php" title="Voltar a Login"> SAIR </a></div><br><br>
				<div class="jumbotron">
					<center>
				    		<img src="images/logo3.png" width="300px" hieght="150px" style="margin-top:-25px;"><br>
				    		<h2>Painel do Aluno</h2><br>
				    </center>
					<div class="container" style="text-align:justify; background:#fff; border-radius:6px;">
	                	<div class="tabbable tabs-left" style="margin-top:10px;">
						    <ul class="nav nav-pills">
						    	<li class="active"><a href="#tab1" data-toggle="tab">Tabela de Alunos</a></li>
						    	<li><a href="#tab2" data-toggle="tab">Tabela de Professores</a></li>
						    	<li><a href="#tab3" data-toggle="tab">Alunos - Aulas</a></li>
						    	<li><a href="#tab4" data-toggle="tab">Professores - Aulas</a></li>
						  	</ul>
						  	<div class="tab-content">
						    
									<div class="tab-pane active" id="tab1">
				                        <h3>Alunos</h3>
				                        <hr>
				                        <center>
				                            	
										</center><br>
				                    </div>

				                    <div class="tab-pane" id="tab2">
				                            <h3>Professores</h3>
				                            <hr>
				                            <center>
				                            	
											</center><br>
				                    </div>


				                    <div class="tab-pane" id="tab3">
				                            <h3>Alunos - Aulas</h3>
				                            <hr>
				                            <center>
				                            	
											</center><br>
				                    </div>

				                    <div class="tab-pane" id="tab4">
				                            <h3>Professor - Aulas</h3>
				                            <hr>
				                            <center>
				                            	
											</center><br>
				                    </div>
						  	</div>
						</div>   
                	</div>
			    </div>
			</div>

		</body>

</html>