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
			Menu (Administrador)
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
				    		<h2>Painel de Controle ADM</h2><br>
				    </center>
					<div class="container" style="text-align:justify; background:#fff; border-radius:6px;">
	                	<div class="tabbable tabs-left" style="margin-top:10px;">
						    <ul class="nav nav-pills">
						    	<li class="active"><a href="#tab1" data-toggle="tab">Tabela de Alunos</a></li>
						    	<li><a href="#tab3" data-toggle="tab">Alunos - Aulas</a></li>
						    	<li><a href="#tab2" data-toggle="tab">Tabela de Professores</a></li>
						    	<li><a href="#tab4" data-toggle="tab">Professores - Aulas</a></li>
						  	</ul>
						  	<div class="tab-content">
						    
									<div class="tab-pane active" id="tab1">
				                        <h3>Alunos</h3>
				                        <hr>
				                        <center>
				                            	<?php				
													//chama o arquivo de conexão com o bd
													include('includes/conexaodb.php');
																		 
													//consulta sql
													$query = mysql_query("SELECT cpf, nome, data, sexo, email, telefone, senha FROM aluno ORDER BY nome")
													or die(mysql_error());
																			 
													//faz um looping e cria um array com os campos da consulta
													echo "<center>";
													echo "<table border='1' width='300' class='tabela bradius' colspan='2' style='text-align:center;'>";
													echo "<tr>";
													echo "<th>Deletar</th>";
													echo "<th>Editar</th>";
													echo "<th>CPF</th>";
													echo "<th>Nome</th>";
													echo "<th>Nascimento</th>";
													echo "<th>Sexo</th>";
													echo "<th>Email</th>";
													echo "<th>Telefone</th>";
													echo "<th>Senha</th>";
													echo "</tr>";
																				
													while($linha = mysql_fetch_array($query))
													{
													echo "<tr>";
													echo "<td>	
													<a href='form_del.php?id=".$linha['cpf']."'>
													<center><img src='imagens/delete.png' width='20' class='imagem'></center>
													</a>
													</td>";
													echo "<td>	
													<a href='form_update.php?id=".$linha['cpf']."'>
													<center><img src='imagens/edit.png' width='20' class='imagem'></center>
													</a>
													</td>";
													echo "<td>".$linha['cpf']."</td>";
													echo "<td>".$linha['nome']."</td>";
													echo "<td>".$linha['data']."</td>";
													echo "<td>".$linha['sexo']."</td>";
													echo "<td>".$linha['email']."</td>";
													echo "<td>".$linha['telefone']."</td>";
													echo "<td>".$linha['senha']."</td>";
													echo "</tr>";
													}
													echo "</table>";
													echo "</center>";
																		
												?>
										</center><br>
				                    </div>

				                    <div class="tab-pane" id="tab2">
				                            <h3>Professores</h3>
				                            <hr>
				                            <center>
				                            	<?php				
													//chama o arquivo de conexão com o bd
													include('includes/conexaodb.php');
																		 
													//consulta sql
													$query = mysql_query("SELECT cpf, nome, data, sexo, email, telefone, senha FROM professor ORDER BY nome")
													or die(mysql_error());
																			 
													//faz um looping e cria um array com os campos da consulta
													echo "<center>";
													echo "<table border='1' width='300' class='tabela bradius' colspan='2' style='text-align:center;'>";
													echo "<tr>";
													echo "<th>Deletar</th>";
													echo "<th>Editar</th>";
													echo "<th>CPF</th>";
													echo "<th>Nome</th>";
													echo "<th>Nascimento</th>";
													echo "<th>Sexo</th>";
													echo "<th>Email</th>";
													echo "<th>Telefone</th>";
													echo "<th>Senha</th>";
													echo "</tr>";
																				
													while($linha = mysql_fetch_array($query))
													{
														echo "<tr>";
														echo "<td>	
															<a href='form_del.php?id=".$linha['cpf']."'>
															<center><img src='imagens/delete.png' width='20' class='imagem'></center>
															</a>
														</td>";
														echo "<td>	
															<a href='form_update.php?id=".$linha['cpf']."'>
															<center><img src='imagens/edit.png' width='20' class='imagem'></center>
															</a>
														</td>";
														echo "<td>".$linha['cpf']."</td>";
														echo "<td>".$linha['nome']."</td>";
														echo "<td>".$linha['data']."</td>";
														echo "<td>".$linha['sexo']."</td>";
														echo "<td>".$linha['email']."</td>";
														echo "<td>".$linha['telefone']."</td>";
														echo "<td>".$linha['senha']."</td>";
														echo "</tr>";
													}
													echo "</table>";
													echo "</center>";
																		
												?>
											</center><br>
				                    </div>


				                    <div class="tab-pane" id="tab3">
				                            <h3>Alunos - Aulas</h3>
				                            <hr>
				                            <center>
				                            	<?php				
													//chama o arquivo de conexão com o bd
													include('includes/conexaodb.php');
																		 
													//consulta sql
													$query = mysql_query("SELECT cpf_aluno, id_atividade FROM alunoxatividade ORDER BY cpf_aluno")
													or die(mysql_error());
																			 
													//faz um looping e cria um array com os campos da consulta
													echo "<center>";
													echo "<table border='1' width='300' class='tabela bradius' colspan='2' style='text-align:center;'>";
													echo "<tr>";
													
													echo "<th>CPF</th>";
													echo "<th>Nome</th>";
													echo "<th>Atividade</th>";
													echo "</tr>";
																				
													while($linha = mysql_fetch_array($query))
													{
														echo "<tr>";
																											
													
														echo "<td>".$linha['cpf_aluno']."</td>";

														$procura = $linha['cpf_aluno'];
														$query2 = mysql_query("SELECT nome FROM aluno where cpf='$procura'") or die(mysql_error());
														while($linha2 = mysql_fetch_array($query2)){
														echo "<td>".$linha2['nome']."</td>";	
														}

														$procura = $linha['id_atividade'];
														$query2 = mysql_query("SELECT nome FROM atividades where id='$procura' order by nome") or die(mysql_error());
														while($linha2 = mysql_fetch_array($query2)){
														echo "<td>".$linha2['nome']."</td>";	
														}

														echo "</tr>";
													}
													echo "</table>";
													echo "</center>";
																		
												?>
											</center><br>
				                    </div>

				                    <div class="tab-pane" id="tab4">
				                            <h3>Professor - Aulas</h3>
				                            <hr>
				                            <center>
				                            	<?php				
													//chama o arquivo de conexão com o bd
													include('includes/conexaodb.php');
																		 
													//consulta sql
													$query = mysql_query("SELECT cpf_professor, id_atividade FROM professorxatividade ORDER BY cpf_professor")
													or die(mysql_error());
																			 
													//faz um looping e cria um array com os campos da consulta
													echo "<center>";
													echo "<table border='1' width='300' class='tabela bradius' colspan='2' style='text-align:center;'>";
													echo "<tr>";
						
													echo "<th>CPF</th>";
													echo "<th>Nome</th>";
													echo "<th>Aula</th>";
													echo "</tr>";
																				
													while($linha = mysql_fetch_array($query))
													{
														echo "<tr>";												
													
														echo "<td>".$linha['cpf_professor']."</td>";

														$procura = $linha['cpf_professor'];
														$query2 = mysql_query("SELECT nome FROM professor where cpf='$procura'") or die(mysql_error());
														while($linha2 = mysql_fetch_array($query2)){
														echo "<td>".$linha2['nome']."</td>";	
														}

														$procura = $linha['id_atividade'];
														$query2 = mysql_query("SELECT nome FROM atividades where id='$procura'") or die(mysql_error());
														while($linha2 = mysql_fetch_array($query2)){
														echo "<td>".$linha2['nome']."</td>";	
														}

														echo "</tr>";
													}
													echo "</table>";
													echo "</center>";
																		
												?>
											</center><br>
				                    </div>
						  	</div>
						</div>   
                	</div>
			    </div>
			</div>

		</body>

</html>