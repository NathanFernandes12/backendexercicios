<?php

//Exemplo com variável numerico
/*idade+ 20;
$resultado + ($idade >=18) ? "Maior de idade" : "Menor de idade";
echo $resultado; // Saída: Maior de Idade
*/

/*$nome = "Ana";
$mensagem = ($nome == "Ana") ? "Olá, Ana!" : "Olá, Visitante!";
echo $mensagem; // Saída: Olá, Ana!*/

$is_logged_in = true;

$mensagem = $is_logged_in ? "Bem vindo de volta!" : "Por favor, faça login.";
echo $mensagem;
?>