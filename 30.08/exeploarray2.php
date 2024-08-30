<?php

//Criando a Array lista_coisas
$lista_coisas = [];

//Criando uma Array frutas, dentro da Array lista_coisas
$lista_coisas ['frutas'] = ['banana', 'maçã', 'morango', 'uva'];

//Criando uma Array pessoas, dentro da Array lista_coisas
$lista_coisas ['pessoas'] = ['joão', 'josé', 'maria'];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

//Alterando o terceiro valor da array FRUTAS
$lista_coisas['frutas'][2] = 'Abacaxi';

//Alterando o segundo valor da array PESSOAS
$lista_coisas['pessoas'][1] = 'Carlos';

echo "O terceiro valor da array FRUTAS agora é:";
echo $lista_coisas['frutas'][2];

echo "<hr>";

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

echo "O segundo valor da array PESSOAS agora é:";
echo $lista_coisas['pessoas'][1];
?>