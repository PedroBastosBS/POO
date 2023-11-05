<?php
$numero = readline("Digite um número inteiro positivo: ");

$soma = 0;
for ($i = 1; $i <= $numero; $i++) {
    if ($i % 2 !== 0) {
        $soma += $i;
    }
}

echo "A soma de todos os números ímpares de 1 até " . $numero . " é: " . $soma . "\n";
?>