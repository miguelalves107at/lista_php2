<?php
$soma = 0;

$num = readline("Digite um numero: ");

while ($num != 0) {
    $soma = $soma + $num;

    $num = readline("Digite um numero: ");
}

echo "A soma dos numeros digitados é: " . $soma;
?>