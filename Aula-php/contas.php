<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo de Receitas e Despesas</title>
</head>
<body style="font-family: 'Courier New';">
    <h1>UTILIZANDO O MÉTODO POST</h1>

    <form action="" name="contas" method="post">

    <p style="color:blue; font-weigth:bold">Despesas</p>
        <p><label>Água.....:</label>
        <input type="number" min="1" name="agua" require>
    </p>

    <p><label>Luz.....:</label>
        <input type="number" min="1" name="luz" require>
    </p>

    <p><label>Telefone.:</label>
        <input type="number" min="1" name="telefone" require>
    </p>

    <p><label>Internet.:</label>
        <input type="number" min="1" name="internet" require>
    </p>

    <p style="color:red; font-weigth:bold">Receitas</p>
    <p><label>Salário.:</label>
        <input type="number" min="1" name="salario" require>
    </p>

    <p><label>Serviços.:</label>
        <input type="number" min="1" name="agua" require>
    </p>
    <p>
        <button type="submit" name="calcular">Calcular</button>
    </p>

    </form>
</body>
</html>    