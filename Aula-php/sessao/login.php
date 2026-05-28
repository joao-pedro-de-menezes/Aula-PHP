<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="login">
        <form name="login" method="post" action="ValidarLogin.php">
            <table>
                <caption>Acesso ao Sistema</caption>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name="email" size="30" maxlength="30" required></td>
                </tr>
                <tr>
                    <td><label>Senha:</label></td>
                    <td><input type="password" name="senha" size="20" maxlength="20" required></td>
                </tr>
                <tr>
                    <td colspan="2" aling="center">
                        <button type="submit" name="acessar">Acessar</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>