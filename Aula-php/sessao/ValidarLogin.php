<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação do Login</title>
</head>
<body>
    <?php
        $email =    $_POST["email"]; // Recupera o conteudo da caixa de texto
        $senha =    $_POST["senha"];

        if($email == "user@provedor.com.br" && $senha == "123")
        {
            echo "<h1>Seja bem-vindo</h1>";
            session_start();
            $_SESSION["email"] =    $email; 
            echo "<meta http-equiv='refresh' content='3;url=TelaPrincipal.php'/>";
        } 
        else {
            echo "<br>Retornando a página Login...";
            echo "<meta http-equiv='refresh' content='3;url=login.php'/>";
        }
    ?>
</body>
</html>