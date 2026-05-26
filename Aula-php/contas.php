<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo de Receitas e Despesas</title>
</head>
<body style="font-family: 'Courier New';">
    <h1>UTILIZANDO O MÉTODO POST</h1>

    <form action="" name="contas" method="POST">

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
        <input type="number" min="1" name="servicos" require>
    </p>
    <p>
        <button type="submit" name="calcular">Calcular</button>
    </p>
    </form>

    <?php
    if(isset($_POST["calcular"])) // Se houver o click no botão calcular
        // Resgatando os dados do formulário
        {
        $agua = $_POST["agua"];
        $luz          =   $_POST["luz"];
        $fone         =   $_POST["telefone"];
        $internet     =   $_POST["internet"];
        $salario      =   $_POST["salario"];
        $servicos     =   $_POST["servicos"];

        // Cálculos das despesas
        $Total_Despesas = $agua + $luz + $fone + $internet;
        echo "<hr><p>Total das Despesas: </p>" . "R$ " . number_format($Total_Despesas,2,",",".");

        // Cálculo das receitas
        $Total_Receitas = $salario + $servicos;
        echo "<br><p>Diferença: </p>" . "R$ " . number_format($Total_Receitas,2,",",".");

        // Diferença entre receitas e despesas
        $Diferenca = $Total_Receitas - $Total_Despesas;
        echo "<br><b>Diferença:.......:</b> R$ " . number_format($Diferenca,2,",",".");
    }
    ?>
</body>
</html>    