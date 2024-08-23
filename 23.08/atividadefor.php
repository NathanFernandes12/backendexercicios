<?php
//Inicializa a variável que vai somar
$soma = 0;

//Utilizando o for para somar até 100(looping)
for ($i = 1; $i <= 100; $i++ ) {
    $soma += $i;
    $somafinal = $soma;

    //Soma
    echo "A soma é igual a: $somafinal<br>";
}
?>