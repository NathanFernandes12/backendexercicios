<?php

//iterar 0 a q0
for ($numero = 1; $numero <=10; $numero++) {

    //classificação
    if ($numero >= 1 && $numero <= 3) {
        $categoria = "baixo";
    } elseif ($numero >= 4 && $numero <= 7) {
        @$categoria = "medio";
    } elseif ($numero >= 8 && $numero <= 10) {
        $categoria = "alto";
    }

    //ver se o número é par
    $tipo = ($numero % 2 == 0) ? "par" : "ímpar";

    //mensagem
    echo "O número $numero é $tipo, pertence a categoria $categoria.<br>";
}