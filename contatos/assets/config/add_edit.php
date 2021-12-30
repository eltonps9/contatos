<?php
require "./conexao.php";

$id=filter_input(INPUT_GET,'id');
$nome=filter_input(INPUT_POST,'nome');
$email=filter_input(INPUT_POST,'email');
$numero=filter_input(INPUT_POST,'num');
$mensagem=filter_input(INPUT_POST,'mensa');


if($nome){
    $sql=$pdo->prepare("SELECT * FROM contatos");
    $sql->execute();
    if($sql){
        $sql=$pdo->prepare("UPDATE contatos SET nome =:nome, numero=:numero, mensagem=:mensa, email=:email WHERE id=:id");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':mensa', $mensagem);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    
    header("Location:../pages/contatos.php");
    exit;
  
}


    
