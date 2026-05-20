<?php
    echo "<h1>VARIÁVEL TIPO INTEIRO!</h1>";
    $numero1 = 10;
    var_dump($numero1); // A função var_dump, exibe o tipo da variável

    echo "<hr>"; // serve pra colocar um separador na pagina

    $numero2 = 15;
    var_dump($numero2);

    $result = $numero1 + $numero2; // soma dos numeros
    echo "<h3 style='color: red'>Total: " .$result . "</h3>"; // aqui conseguimos colocar coloração igual o CSS
    // os pontos (.) servem para concatenar as coisas, é a mesma coisa que colocar $result no meio do texto
?>