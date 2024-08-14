<?php

//declarei as variáveis
$nota1 = 7;
$nota2 = 6;
$nota3 = 10;
$media = ($nota1 + $nota2 + $nota3) / 3;

//definir se a nota é maior ou menor que 7 Utilizando if ou else
if ($media >= 7) {
    echo 'Aluno aprovado';
}else {
    echo 'O aluno não atingiu as expectativas';
}

//imprimi a nota de cada etapa e sua media
echo "<br> Nota 1: $nota1 <br>";
echo "Nota 2: $nota2 <br>";
echo "Nota 3: $nota3 <br>";
echo "A media do aluno foi: $media <br>"
?>