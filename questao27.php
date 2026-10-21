<?php
$alunosAcimaLimite = 0;

for ($i = 1; $i <= 12; $i++) {
    echo "Digite a quantidade de faltas do aluno $i: ";
    $faltas = fgets(STDIN);

    if ($faltas <= 15) {
        echo "Aluno $i está dentro do limite de faltas.\n";
    } else {
        echo "Aluno $i ultrapassou o limite de faltas.\n";
        $alunosAcimaLimite++;
    }
}