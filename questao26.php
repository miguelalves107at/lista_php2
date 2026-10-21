<?php
$somaPares = 0;
$somaImpares = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $somaPares += $i;
    } else {
        $somaImpares += $i;
    }
}