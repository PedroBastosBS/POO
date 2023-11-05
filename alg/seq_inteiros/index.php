<?php
$numeros = [];
for ($i = 0; $i < 5; $i++) {
    $numeros[] = readline("Digite o " . ($i + 1) . "º número: ");
}

rsort($numeros);
$segundo_maior = $numeros[1];

echo "Segundo maior valor: " . $segundo_maior . "\n";
?>