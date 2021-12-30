<?php
require "../config/conexao.php";
if($_SESSION['login']==false){
    header('Location:../../index.html');
    exit;
}
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
            <div class="para">
                <p>
                    <?php
                        session_start();
                        if($_SESSION['login']){
                            echo $_SESSION['login'];

                        }
                    ?>
                </p>
            </div>
        </div>
    
            
        
        
        <nav class="nav">
        
            <div href="" id="mostrar" onclick="trocar_usu()">
                <div class="mostrar" >
                   <a href="../config/sair_login.php">
                        <div class="menu1"></div>
                        <div class="menu1"></div>
                        <div class="menu1"></div>
                   </a>
                </div>
            </div>
            <div id="mais">
                <a href="../config/cadastros.php">+</a>
            </div>
        </nav>
        <div id="contatos-area">

            <?php foreach($contact as $listas):?>
                <div id="contato">
                    <div class="fto"></div>
                    
                    <p><?=$listas['nome'];?></p>
                    
                    <div id="menu">
                        <div id="edita"><a href="./detals.php?id=<?=$listas['id'];?>">Detalhes</a></div>
                        <div id="edita"><a href="../config/remove.php?id=<?=$listas['id'];?>">Excluir</a></div>
                    </div>
                </div>
            <?php endforeach;?>
            
        </div> 
    </main>
    <aside id="tela">
        
        <a href="trocar.php">Trocar usuario</a>
        
        <p>tudo o que voce precisa é clicar ai</p>
        <div class="img"><img src="" alt=""></div>
        <div class="sr" onclick="sair()">
            <p>+</p>
        </div>
    </aside>
</body>
<script src="../js/script_login.js"></script>

</html>