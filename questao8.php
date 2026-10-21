<?php
function menu() {
    echo "\n===== MENU =====\n";
    echo "1 - Cadastrar aluno\n";
    echo "2 - Consultar aluno\n";
    echo "3 - Excluir aluno\n";
    echo "0 - Sair\n";
    echo "Escolha uma opção: ";
}

$opcao = 1;

while ($opcao != 0) {
    menu();
    $opcao = (int) readline("Escolha uma opção: ");
}

echo "Programa encerrado!\n";
?>