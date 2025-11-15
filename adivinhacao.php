<?php
echo "JOGO DE ADIVINHAÇÃO\n";
echo "===================\n";

$pontuacao = 0;
$rodadas = 3;

for ($i = 1; $i <= $rodadas; $i++) {
    echo "\n--- Rodada $i ---\n";
    $numero = rand(1, 5);
    $acertou = false;
    
    for ($tentativa = 1; $tentativa <= 3; $tentativa++) {
        echo "Tentativa $tentativa/3 - Digite um número (1-5): ";
        $palpite = (int)readline();
        
        if ($palpite == $numero) {
            echo "Acertou!\n";
            $pontuacao += (4 - $tentativa) * 10;
            $acertou = true;
            break;
        } else {
            echo "Errou! ";
            if ($tentativa < 3) {
                echo "Tente novamente!\n";
            }
        }
    }
    
    if (!$acertou) {
        echo "O número era: $numero\n";
    }
}

echo "\n--- FIM DO JOGO ---\n";
echo "Pontuação: $pontuacao\n";

if ($pontuacao >= 60) {
    echo "Excelente!\n";
} elseif ($pontuacao >= 30) {
    echo "Bom jogo!\n";
} else {
    echo "Tente novamente!\n";
}
