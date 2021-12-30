<?php
session_start();
require "../config/conexao.php";



$arraydetals=[];
$id=filter_input(INPUT_GET,'id');

$sql=$pdo->prepare("SELECT * FROM contatos WHERE id=:id ");
$sql->bindValue(':id',$id);
$sql->execute();
    

if($sql->rowCount()>0){
    $arraydetals=$sql-> fetchAll(PDO:: FETCH_ASSOC);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_detals.css">
    <title>meu contato</title>
</head>
<body>
    <div class="container">
        <div class="body">
            <div class="header">
                <div class="voltar">
                    <a href="../pages/contatos.php" >voltar</a>
                </div>

                <div class="img">
                    <img src="" alt="" >
                </div>
                <nav>
                <?php
                    foreach($arraydetals as $detalhes):?>
                        <div class="header--bx">
                        <p>Nome:   <?=$detalhes['nome'];?></p><br>
                        <p>Número:   <?=$detalhes['numero'];?></p><br>
                        <p>Email:   <?=$detalhes['email'];?></p><br>
                        <p>Mensagem:  <?=$detalhes['mensagem'];?></p><br><br>

                    <?php endforeach;?>
                    </div>
                    <div class="acoes">
                        <a href="../config/remove.php?id=<?=$detalhes['id'];?>"><img src="../images/svg/remove.svg" alt="" ></a>
                        <a href="../config/editar.php?id=<?=$detalhes['id'];?>"><img src="../images/svg/edite.svg" alt="caneta" ></a>

                    </div>
                </nav>
                
                    
                
            </div>
        </div>
    </div>
</body>
</html>



