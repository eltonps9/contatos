<?php
require "../config/conexao.php";




$nomes=[];
$id=filter_input(INPUT_GET,'id');

if($id){
    $sql=$pdo->prepare("SELECT * FROM contatos WHERE id= :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    if($sql){
        $nomes=$sql->fetch(PDO:: FETCH_ASSOC);
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato pessoal</title>
    <link rel="stylesheet" href="../css/style_contact.css">
</head>

<body>



    <div class="container">

        <div class="body">
            <div class="voltar">
                <a href="./contatos.php">voltar</a>
            </div>
            <div class="header">
                <div class="img">
                </div>
                <nav>
                    <div class="nome">
                        <p><?=$nomes['nome'];?></p>
                    </div>

                    <!-- botoes -->

                    <div class="botao">
                        <div class="esq">
                            <a href="../config/remove.php?id=<?=$nomes['id'];?>">
                                <img src="../images/svg/remove.svg" alt="">
                            </a>
                        </div>
                        <div class="dir">
                            <a href="../config/editar.php?id=<?=$nomes['id'];?>">
                                <img src="../images/svg/edite.svg" alt="caneta">
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
            <!-- informações -->
            <div class="infor">
                
            </div>
        </div>



    </div>
</body>

</html>





            
            
                
                

                    

                
                    
            
        