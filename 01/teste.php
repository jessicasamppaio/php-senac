<?php

    echo "Olá Mundo! <BR>";

    // Isso é um comentário

    # Isso também é um comentário

    /*
        Isso é um comentário em multiplas linhas
        Eu disse, multiplas linhas
    */

    // Declaração de variáveis:
    $nome = "João";
    $sobrenome = "Silva";
    $nome_completo = $nome ." ". $sobrenome;


    //echo $nome;
    //echo $sobrenome;
    echo $nome ." ". $sobrenome;
    echo $nome_completo;

    // Váriaveis numéricas:
    $idade = 25;
    $ano = 2024;

    echo $idade . "<br>";
    echo $ano - $idade; // operações matematicas

    echo 'Esse é um texto em aspas simples <br>';
    echo "Esse é um texto em aspas duplas <br>";

    // Trabalhando com aspas simples e duplas:
    echo 'Dom Pedro isse: "Inependencia ou Morte!" <br>';
    echo "$nome tem $idade anos de idade <br>";
    echo '$nome tem $idade anos de idade <br>';

    // Testando o case sensitive:
    echo "Texto 1 <br>";
    ECHO "Texto 2 <br>";

    // Testando o case sensitive - variáveis:
        $primeiroNome = "Carlos";

        echo $primeiroNome;
        ECHO $PRIMEIRONOME;
?>