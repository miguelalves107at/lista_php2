<?php
function semana() {
    $dias = [20, 30, 25, 25, 20, 20, 30];
    $soma = 0;

    for ($i = 0; $i < 7; $i++) {
        $soma += $dias[$i];
    }

    echo "Total da semana: " . $soma;
}

semana();
?>