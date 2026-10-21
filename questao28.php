<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Digite o peso do lote $i: ";
    $peso = (float) fgets(STDIN);

    if ($peso < 100) {
        echo "A fruta está pequena.\n";
    } elseif ($peso <= 200) {
        echo "A fruta está média.\n";
    } else {
        echo "A fruta está grande.\n";
    }
}
?>