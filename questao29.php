<?php
for ($i = 1;$i <= 8;$i++){
    echo "pedido $i - digite o valor da compra:";
    $valor = (float) readline();

    if ($valor >= 300) {
        $frete = 0;
    } elseif ($valor >= 150) {
        $frete = 15;
    } else {
        $frete = 25;
    }

    echo "Frete do pedido $i: R$ " . number_format($frete, 2, ',', '.') . "\n"; #exibe as casas decimais como o rs
}
?>