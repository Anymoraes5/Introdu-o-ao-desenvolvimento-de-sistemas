<?php
    //variavies para conectar ao banco de dados 
    $server_host = "localhost";
    $server_user = "root";
    $server_password = "";
    $database_name = "sge";

    //declaração de constantes para conectar ao banco de dados 
    define ('SERVER_HOST','localhost:3307');
    define ('SERVER_USER','root');
    define ('SERVER_PASSWORD','');
    define ('DATABASE_NAME','sge');
    

    // funçao para conectar o banco de dados 
    //a conexão ao banco de dados inicialmente nao utilizar orientação a objetos
   
    //função utilizando as variaveis 
    //$conexao = mysqli_connect ($server_host,$server_user,$server_password,$database_name);

    // funçao utilizadp as constantes 
    $conexao = mysqli_connect(SERVER_HOST,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);

    //função sem  uso de variaveis e constantes 
    //$conexao = mysqli_connect ("localhost","root","","sge");
    
