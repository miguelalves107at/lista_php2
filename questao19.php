<?php

for ($aluno = 1; $aluno <= 5; $aluno++) {
    echo "Digite a nota do aluno $aluno: ";
    $nota = readline();

    echo "Nota do aluno $aluno:" . $nota . "\n";

    $media = ($nota + $nota)/ 5;
    echo "a media da turma e" . $media;
}

?>