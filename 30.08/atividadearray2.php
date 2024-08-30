<?php

//Criando a Array $cadastro
$cadastro = [];

//Criando uma Array USUARIO, dentro da Array $CADASTRO
$cadastro ['usuario'] = ['Joao', 'Maria', 'Pedro'];

//Criando uma Array SENHA, dentro da Array $CADASTRO
$cadastro ['senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

//Alterando o segundo valor da array USUARIO
$cadastro['usuario'][1] = 'Ana';

//Alterando o segundo valor da array SENHA
$cadastro['senha'][1] = 'efgh';

echo "O nome do USUÁRIO agora é:";
echo $cadastro['usuario'][1];

echo "<hr>";

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo "A SENHA agora é:";
echo $cadastro['senha'][1];
?>