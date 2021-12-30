<?php
require "./conexao.php";


$nome=filter_input(INPUT_POST,'nome');
$email=filter_input(INPUT_POST,'email');
$numero=filter_input(INPUT_POST,'num');
$mensagem=filter_input(INPUT_POST,'mensa');

if($numero){
    $sql=$pdo->prepare("SELECT * FROM contatos WHERE numero = :num");
    $sql->bindValue(':num',$numero);
    $sql->execute();

    if($numero && $nome && $mensagem ){
        $sql=$pdo->prepare("INSERT INTO contatos (nome, numero, mensagem, email) VALUES (:nome, :numero, :mensa, :email)");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':mensa', $mensagem);
        $sql->bindValue(':email', $email);
        $sql->execute();

        header("Location:../pages/contatos.php");
        exit;
    }else{
        header("Location:contatos.php");
        exit;
    }
    header("Location:./cadastrar.php");
    exit;
}