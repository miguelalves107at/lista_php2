<?php
$senha = readline("Digite a senha: ");

while ($senha != 1234) {
    echo "Senha incorreta. Tente novamente.\n";
    $senha = readline("Digite a senha: ");
}

echo "Acesso permitido!\n";
?>