<?php
$limite = readline("Digite um número inteiro positivo: ");

for ($i = 0; $i <= $limite; $i++) {
    if ($i % 2 === 0) {
        echo $i . "\n";
    }
}
?>