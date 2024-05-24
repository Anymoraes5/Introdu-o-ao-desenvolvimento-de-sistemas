<?php
    //incluir o arquivo de conexao com o banco de dados
    include 'database.php';

    //iniar sessao no php
    session_start();

    //recuperar as informações enviadas do formulario 
    $login_sge = $_POST['login_sge'];
    $password_sge = $_POST['password_sge'];

    //criar uma validação para verificar se os campos 
    //do formulario foram preenchidos 

    if(empty($login_sge)){
        $_SESSION['mensagem'] = "Preencha o Campo Login!";
        header("location: form_login_sge.php");
    }
    elseif (empty($password_sge)){
        $_SESSION['mensagem'] = "Preencha o Campo Password!";
        header("location: form_login_sge.php");   
    }
    else {
        //sql para validar os dados 
        $sql_login = "SELECT * FROM sge_login WHERE login_sge = '$login_sge'
        AND password_sge = '$password_sge'";

        //acessar e executar os valores do banco de dados
        $consulta_login = mysqli_query($conexao,$sql_login);

        //converter os resultados obtidos e um array associativo (entre coluna e valor )
        $dados_login = mysqli_fetch_array ($consulta_login);

        //validar o login e senha com o retorno dos dados
        if ($dados_login['login_sge']== $login_sge and $dados_login ['password_sge'] == $password_sge)
        {
            //criar um array com os dados do usuario 
            $usuario = array("login" => $dados_login['login_sge'],
            "senha" => $dados_login['password_sge'], 
            "perfil" => $dados_login['profile_sge']);

            // colocar um array de usuario na sessao 
            $_SESSION['usuario'] = $usuario;

            // redirecionar para a pagina do painel (verificar)
            header ("location:painel_sge.php");

        }
        else{
            //criar na sessao uma mensagem de aviso com o erro 
            $_SESSION['mensagem'] = "Login ou senha inválidos";
            header ("Location: form_login_sge.php");

        }
    }