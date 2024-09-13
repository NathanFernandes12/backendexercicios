<?php

$nome_usu = "Priscila";
$lista_usuarios = array("Julio", "Cauã", "Miguel", "Lucas", "Letícia", "Amanda", "Felipe", "Priscila", "Fernanda", "Maycon");

$indice = array_search("$nome_usu", $lista_usuarios);

if ($indice !== false) {
    echo "$nome_usu foi encontrado na posição: " . $indice;
} else {
    echo "$nome_usu não foi encontrado na lista de usuários";
}
?>