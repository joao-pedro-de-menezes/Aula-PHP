<?php
    echo "<h1>VARIAVEL TIPO DOUBLE</h1>";
    $valor1 = 5.2;
    var_dump($valor1);

    $valor2 = 3.5;
    echo "<br>"; // Quebrar linha
    var_dump($valor2);

    echo "<hr>Valor 1: " .$valor1;
    echo "<br>Valor 2: " .$valor2;

    // Efetuando o cálculo
    $total = $valor1 + $valor2;
    echo "<strong><br>A soma de $valor1 + $valor2 é de: " .$total . "</strong>";
?>