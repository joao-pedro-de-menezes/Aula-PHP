<?php
    session_start();
    if(isset($_SESSION["email"]))
    {
        $email  =  $_SESSION["email"];
        echo "Seja bem-vindo $email";
    }
    else
    {
        echo "Você precisa efetuar o login, para ter acesso ao Sistema!";
        echo "<meta http-equiv='refresh' content='3;url=login.php' />";
        return;
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="estilos_login.css">
</head>
<body>
    <h3>Seja bem-vindo</h3>
    <form method="POST" action="logout.php">
        <input type="submit" name="sair" value="Sair" class="botao">
    </form>
</body>
</html>