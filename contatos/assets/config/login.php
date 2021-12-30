<?php
session_start();
require "conexao.php";


$nome=filter_input(INPUT_POST,'nome');
$senha=filter_input(INPUT_POST,'senha');

if($nome && $senha){
    $sql=$pdo->prepare("SELECT * FROM login WHERE nome=:nome && senha=:senha");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':senha', $senha);
    $sql->execute();

    if($sql->rowCount() > 0){
        $_SESSION['login']= $nome;
        header("Location:../pages/contatos.php");
        exit;
    }else{
        header("Location:../../index.html");
        exit;
    }
    
}
