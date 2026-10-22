<?php
echo "Quantidade de modelos de IA: ";
$qtdModelos = (int) readline();

echo "Quantidade de testes por modelo: ";
$qtdTestes = (int) readline();

$maiorMedia = -1;
$modeloMelhor = 0;

for ($i = 1; $i <= $qtdModelos; $i++) {
    $somaNotas = 0;

    echo "\n--- Modelo $i ---\n";

    for ($j = 1; $j <= $qtdTestes; $j++) {
        do {
            echo "Digite a nota do teste $j (0 a 100): ";
            $nota = (float) readline();

            if ($nota < 0 || $nota > 100) {
                echo "Nota inválida! Digite um valor entre 0 e 100.\n";
            }
        } while ($nota < 0 || $nota > 100);

        $somaNotas += $nota;

        if ($nota < 50) {
            echo "Desempenho baixo.\n";
        } elseif ($nota < 80) {
            echo "Desempenho moderado.\n";
        } else {
            echo "Desempenho alto.\n";
        }
    }

    $media = $somaNotas / $qtdTestes;

    echo "Média do Modelo $i: " . number_format($media, 2, ',', '.') . "\n";

    if ($media > $maiorMedia) {
        $maiorMedia = $media;
        $modeloMelhor = $i;
    }
}

echo "\n===== RESULTADO FINAL =====\n";
echo "Modelo com maior média: Modelo $modeloMelhor\n";
echo "Maior média de desempenho: "
    . number_format($maiorMedia, 2, ',', '.') . "\n";
?>