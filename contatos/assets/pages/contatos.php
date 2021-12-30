<?php
require "../config/conexao.php";

$contact=[];

$sql=$pdo->query("SELECT * FROM contatos");

if($sql->rowCount()>0){
    $contact=$sql->fetchAll(PDO :: FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contatos</title>
    <link rel="stylesheet" href="../css/style_contatos.css" />
</head>

<body>
    
    <main>
        
        <div id="login">
            <div id="foto"></div>
            <p><?php
            session_start();
            if($_SESSION['login']){
                echo $_SESSION['login'];

            }
            ?>
            </p>
        </div>
    
            
        <div id="opicao">
        
            <nav class="nav">
            
                <a href="" id="mostrar" >
                    <div >
                        <div class="menu1"></div>
                        <div class="menu1"></div>
                        <div class="menu1"></div>
                    </div>
                </a>
                <div id="mais">
                    <a href="../config/cadastros.php">+</a>
                </div>
            </nav>
            
            <?php foreach($contact as $listas):?>
                
                <div id="contato">

                    <a" id="fotocontato"></a>

                    <p><?=$listas['nome'];?></p>
                    <div id="menu">
                        <a href="./detals.php?id=<?=$listas['id'];?>" id="edita"> DETALHES</a>
                        <a href="../config/editar.php?id=<?=$listas['id'];?>" id="edita">EDITAR</a>
                        <a href="../config/remove.php?id=<?=$listas['id'];?>" id="edita">EXCLUIR</a>
                    </div>
                </div>
            <?php endforeach;?>
            
        </div> 
    </main>
</body>
<script src="../js/script_login.js"></script>

</html>