<?php
    session_start();
    $nome_sessao=$_SESSION["nome"];
    $telefone_sessao=$_SESSION["telefone"];
    echo "Nome de sessão: <br>".$nome_sessao;
    echo "Telefone de sessão: <br> ".$telefone_sessao;
    $servername= "localhost";
    $database="exercicio";
    $username="root";
    $password="";
    $connection=mysqli_connect($servername,$username,$password,$database);
    if(!connection){
       die("A conexão falhou");
    }
    echo "Conexão feita com sucesso";
    $sql= "INSERT INTO pessoa(nome, telefone) values ('$nome_sessao', '$telefone_sessao');";
    //forma insegura de executar uma query
    if(mysqli_query($connection, $sql)){
        echo "Registro inserido com sucesso!";
    }
?>
