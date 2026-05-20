<?php
    echo "<h1>VARIÁVEL TIPO STRING</h1>";
    $nome      = $_GET["nome"]; // É basicamente pra pegar o nome que o usuario digitar através da URL
    $sobrenome = $_GET["sobrenome"]; // Mesma coisa

    // Exibindo os nomes armazenados na URL
    echo "Nome: " .$nome . " " .$sobrenome;

?>