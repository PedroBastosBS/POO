<?php
$nota1 = readline("Digite a primeira nota: ");
$nota2 = readline("Digite a segunda nota: ");
$nota3 = readline("Digite a terceira nota: ");

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    echo "Aprovado! Média: " . $media . "\n";
} elseif ($media >= 5 && $media < 7) {
    echo "Recuperação! Média: " . $media . "\n";
} else {
    echo "Reprovado! Média: " . $media . "\n";
}
?>