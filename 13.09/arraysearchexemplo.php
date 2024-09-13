<?php

$nome_pdt = "Melância";
$frutas = array("maçã", "banana", "laranja");

$indice = array_search("$nome_pdt", $frutas);

if ($indice !== false) {
    echo "$nome_pdt foi encontrada na posição: " . $indice;
} else {
    echo "$nome_pdt não foi encontrada na lista de frutas";
}
?>