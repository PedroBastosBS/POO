<?php
$numeros = [];
for ($i = 0; $i < 5; $i++) {
    $numeros[] = readline("Digite o " . ($i + 1) . "º número: ");
}

$maior = max($numeros);
$menor = min($numeros);

echo "Maior valor: " . $maior . "\n";
echo "Menor valor: " . $menor . "\n";
?>
