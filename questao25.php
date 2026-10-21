<?php
$soma = 0;
$maior = 0;

for ($i = 1; $i <= 7; $i++) {
    echo "Digite a temperatura do dia $i: ";
    $temp = readline();

    $soma += $temp;

    if ($i == 1 || $temp > $maior) {
        $maior = $temp;
    }
}

$media = $soma / 7;

echo "Temperatura média: " . $media . " graus\n";
echo "Maior temperatura: " . $maior . " graus\n";
?>