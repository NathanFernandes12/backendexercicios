<?php

$raizquad = 0;
//Utilizando o loop for
for ($i = 1; $i <= 50; $i++) {

    //Calcular a raiz quadrada
    $raizquad = sqrt($i);
    $arredondar = round($raizquad, 2);
    echo "a raiz quadrada é: $arredondar<br>";
}
?>