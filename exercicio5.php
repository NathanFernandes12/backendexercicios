<?php
//usando o for dentro da função para mostrar a tabuada

function mult($tabu) {
    for ($a = 0; $a <= 10; $a++){
        $resultado = $tabu * $a;
        echo " $tabu x $a = $resultado <br>";
    }
}

$tabu = 3;
mult($tabu);
?>