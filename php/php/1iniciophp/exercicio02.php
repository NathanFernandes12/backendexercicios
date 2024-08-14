<?php

//declarei as variáveis
$salario = 1800;
$horas = 10;

//definindo o bonus do salário
if ($salario <2000 and $horas >=10) {
    echo 'O trabalhador recebe 20% de bônus de salário';
}else{
    $salario >2000 and $horas >=5;
    echo 'O trabalhador recebe 10% de salário';
}
?>