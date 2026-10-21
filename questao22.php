<?php
function estoque() {
    $dias = [];
    $soma = 0;

    for ($i = 1; $i <= 5; $i++) {
        echo "Digite a quantidade vendida no dia $i: ";
        $dias[$i] = readline();

        $soma += $dias[$i];
    }

    echo "Total de unidades vendidas: " . $soma . "\n";
}

estoque();
?>