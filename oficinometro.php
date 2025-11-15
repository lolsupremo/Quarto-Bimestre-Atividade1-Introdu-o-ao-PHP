<?php

echo "OFICINÔMETRO - CALCULADORA DE PREÇOS\n";
echo "=====================================\n";

$servicos = [
    1 => ["nome" => "Troca de Óleo", "preco" => 80],
    2 => ["nome" => "Alinhamento", "preco" => 100],
    3 => ["nome" => "Freios", "preco" => 150],
    4 => ["nome" => "Pneus", "preco" => 200]
];

echo "\nSERVIÇOS:\n";
foreach ($servicos as $numero => $servico) {
    echo "$numero. {$servico['nome']} - R$ {$servico['preco']}\n";
}

echo "\nDigite os números dos serviços (ex: 1,3): ";
$escolha = readline();

$total = 0;
$servicosEscolhidos = explode(',', $escolha);

echo "\n--- ORÇAMENTO ---\n";
foreach ($servicosEscolhidos as $numero) {
    $numero = trim($numero);
    if (isset($servicos[$numero])) {
        $servico = $servicos[$numero];
        echo "✓ {$servico['nome']}: R$ {$servico['preco']}\n";
        $total += $servico['preco'];
    }
}

echo "TOTAL: R$ $total\n";
echo "====================\n";
