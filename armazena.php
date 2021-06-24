<?php
    session_start();
    $_SESSION["nome"]=$_POST["nome"];
    $_SESSION["telefone"]=$_POST["telefone"];
?>
<a href="exibe.php"> Clique aqui para exibir os dados </a>
