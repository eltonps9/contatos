
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_cada.css">
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
                    <p class="nome"></p>
                    
                    <div class="header--bx">
                        <form action="../config/add.php" method="post">
                            <input type="text" name="nome" placeholder="seu nome" required><br>
                            <input type="number" name="num" placeholder="seu numero" required><br>
                            <input type="email" name="email" placeholder="seu email" required><br>
                            <input type="text" name="mensa" placeholder="sua mensagem" required><br>
                            <input type="submit" value="Salvar" >
                        </form>
                    </div>
                </nav>
                
                    
                
            </div>
        </div>
    </div>
</body>
</html>