<?php

$nome_pdt = "Melância";
$frutas = array("maçã", "banana", "laranja");

if (in_array("$nome_pdt", $frutas)) {
    echo "$nome_pdt está na lista de frutas.";
} else {
    echo "$nome_pdt não está na lista de frutas.";
}

?>