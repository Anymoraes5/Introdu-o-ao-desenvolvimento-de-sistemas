<?php
    //inclusão do arquivo de conexão com o banco de dados
    include 'database.php';

    //declarar variaveis para armazenar as informações
    //enviadas via formulario

    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $telefone_aluno = $_POST['telefone_aluno'];

    //construir uma string para cadastrar as informações 
    //no banco de dados


    
    // a ordem importa 
    // a ordem importa (precisa estra em apostrofe)
    $sql = "INSERT INTO sge_alunos ( nome_aluno, email_aluno, telefone_aluno) 
                VALUES ('$nome_aluno', '$email_aluno', '$telefone_aluno')";
    //função para cadastrar o banco de dados 
    //função mysql_query necessita de parâmetros
    //1º conexao com o banco de dados 
    //2° comando em sql
    if (mysqli_query($conexao,$sql)){
        //função para aredirecionar para pagina indicada
        header ("location: listar_alunos.php");
    }
    //elseif = elif
    else{
        echo "Falha ao cadastrar no banco de dados";

    }