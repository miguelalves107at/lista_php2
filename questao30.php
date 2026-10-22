<?php
$valor = readline("digite o valor desejado para o saque:");
$n10 = 0;
$n2 = 0;

if($valor <= 0 && $valor < 2){
    echo "valor nao aceitavel.";
}else{
    for($i = 10;$i <= $valor;$i += $valor){
        $n10++;
    }

    $resto = $valor - $n10 * 10;

    for($i = 2;$i <= $resto;$i += 2){
        $n2++;
    }
}

echo "$n10 notas de 10 rs \n";
echo "$n2 notas de 2 rs \n";
?>