<?php

   // conexao com o banco
     include('includes/conexaodb.php');
    session_start();

    $select_db = mysql_select_db("academia"); 
    
    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome           = $_POST["txtnome"];
    $cpf            = $_POST["txtcpf"];
    $email          = $_POST["txtemail"];
    if (isset($_POST['txtsex'])){   
    $sexo           = $_POST['txtsex'];
    }
 	$data 			= $_POST["txtdataa"]; 
    $telefone       = $_POST["txttelefone"];
    $senha          = $_POST["txtsenha"];
    $nivel          = 1;
     
    
if(empty($cpf) || empty($nome) || empty($sexo) || empty($data) || empty($senha)){
    echo"<script language='javascript' type='text/javascript'>alert('Preencha os Campos Obrigatorios.');window.location.href='cadastro.html';</script>";
    $erro = "erro";
}
else{
    
    // Casos de erro
    $query="SELECT cpf FROM aluno WHERE cpf='$cpf'";     
    
            // echo $query;
            $recordset = mysql_query($query, $conn);
            $row       = mysql_fetch_assoc($recordset);
            
            if($cpf        == $row['cpf']){
                echo"<script language='javascript' type='text/javascript'>alert('CPF ja existente!');window.location.href='cadastro.html';</script>";
                $erro = "erro";
            }else{
                $erro = "ok";
            }

    $query="SELECT email FROM aluno WHERE email='$email'";     
            
            // echo $query;
            $recordset = mysql_query($query, $conn);
            $row       = mysql_fetch_assoc($recordset);
         
            if(($email != "") AND ($email == $row['email'])){
                echo"<script language='javascript' type='text/javascript'>alert('Email ja existente!');window.location.href='cadastro.html';</script>";
                $erro = "erro";
            }else{
                $erro = "ok";
            }
}
            
if($erro == "ok"){

    $string_sql = "INSERT INTO aluno (nome,cpf,email,sexo,data,telefone,senha, nivel) VALUES 

    ('$nome','$cpf','$email','$sexo','$data','$telefone','$senha', '$nivel')"; //String com consulta SQL da inserção

    mysql_query($string_sql, $conn); //Realiza a consulta
     
    if(mysql_affected_rows() == 1)
    { //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        
        echo"<script language='javascript' type='text/javascript'>alert('Cadastrado com Sucesso!');window.location.href='login.html';</script>";
       
    } 
    else 
    {

        echo"<script language='javascript' type='text/javascript'>alert('Erro ao Cadastrar-se!');window.location.href='cadastro.html';</script>";

    }   
     
    mysql_close($conn); //fecha conexão com banco de dados 
}
?>

    



