<?php
    
    $nome = "Werner";
    $altura = 1.83;
    $peso = 147;

    $imc = $peso / $altura ** 2;

    echo "$nome, o seu imc é de $imc. E é considerado ";

    if ($imc < 18) {
        echo "abaixo";
    } elseif ($imc > 25) {
        echo "acima";
    } else {
        echo "dentro";
    }

    echo " do recomendado.";