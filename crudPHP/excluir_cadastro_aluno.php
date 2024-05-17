<?php
    //incluir arquivo de conexão com o banco de dados
    include "database.php";

    //resgatar o id via get para realizar a consulta por id 
    $id_aluno = $_GET ['id_aluno'];

    //construir uma string em sql para realizar a exclusão por id 
    $sql_excluir_por_id = "DELETE FROM sge_alunos WHERE sge_alunos.id_aluno = '$id_aluno'";

    if(mysqli_query($conexao,$sql_excluir_por_id)){
        header("location: listar_alunos.php");
    }

    else{
        echo "Falha ao excluir o cadastro.";
    }