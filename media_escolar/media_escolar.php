<?php

    $nome = $_REQUEST["txt_nome"];

    $nota1 = $_REQUEST["txt_nota1"];

    $nota2 = $_REQUEST["txt_nota2"];

    $calcular_media = ($nota1 + $nota2) /2;

    if ($calcular_media >= 6) {
        echo 'Parabéns ' . $nome;
        echo ' Aluno Aprovado! ';
        
    } else {
        
        echo 'Triste, ' . $nome;
        echo ' Aluno Reprovado! ';
    }

?>