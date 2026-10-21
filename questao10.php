<?php
$num = 10;
$digite = readline("Digite um numero: ");

while ($digite < $num) {
    echo "O numero digitado e menor que o verdadeiro.\n";
    $digite = readline("Tente novamente: ");
}

while ($digite > $num) {
    echo "O numero digitado e maior que o verdadeiro.\n";
    $digite = readline("Tente novamente: ");
}

while ($digite == $num) {
    echo "Parabens! Voce acertou!\n";
    break;
}
?>