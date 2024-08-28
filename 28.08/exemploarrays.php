<?php

// Criando a array Lista de frutas
$lista_frutas = array ("Banana", "Maçã", "Morango", "Uva", "Melancia", "Mamão", "Blueberry");

echo $lista_frutas[6]; // Isso mostraria "Blueberry"

//Alterando o Valor 0 -> Banana para Melão
$lista_frutas[0] = 'Melão';

echo "<hr>";
echo $lista_frutas[0];
?>