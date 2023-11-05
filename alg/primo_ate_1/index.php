<?php
$limite = readline("Digite um número inteiro positivo: ");

for ($i = 2; $i <= $limite; $i++) {
    $primo = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j === 0) {
            $primo = false;
            break;
        }
    }
    if ($primo) {
        echo $i . "\n";
    }
}
?>