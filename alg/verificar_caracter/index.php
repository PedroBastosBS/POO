<?php
$caractere = readline("Digite um caractere: ");

$vogais = ['a', 'e', 'i', 'o', 'u'];

if (in_array(strtolower($caractere), $vogais)) {
    echo "É uma vogal.\n";
} else {
    echo "Não é uma vogal.\n";
}
?>