<?php
require "./conexao.php";



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar contato</title>
    <link rel="stylesheet" href="../css/style_edit.css">
</head>
<?php
require "../config/conexao.php";

$editar=[];
$id=filter_input(INPUT_GET,'id');
if($id){
    $sql=$pdo->prepare("SELECT * FROM contatos WHERE id=:id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    if($sql){
        $editar=$sql->fetch(PDO:: FETCH_ASSOC);
    }
}else{
    header("Location:../pages/contact.php");
    exit;
}

?>


<body>
<div class="container">
        <div class="body">
            <div class="header">
                <div class="voltar">
                    <a href="../pages/contatos.php" >cancelar</a>
                </div>

                <div class="img">
                    <img src="" alt="" >
                </div>
                <nav>
                    <p class="nome"><?=$editar['nome'];?>"</p>
                    
                    <div class="header--bx">
                        <form action="../config/add_edit.php?id=<?=$editar['id'];?>" method="post">
                            <input type="text" name="nome" value="<?=$editar['nome'];?>" required><br>
                            <input type="number" name="num" value="<?=$editar['numero'];?>" required><br>
                            <input type="email" name="email" value="<?=$editar['email'];?>" required><br>
                            <input type="text" name="mensa" value="<?=$editar['mensagem'];?>" required><br>
                            <input type="submit" value="Salvar" >
                        </form>
                    </div>
                </nav>
                
                    
                
            </div>
        </div>
    </div>
</body>

</html>