<?php
$numero = readline("Digite um número: ");

$primo = true;

if ($numero <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            $primo = false;
            break;
        }
    }
}

if ($primo) {
    echo "É um número primo.\n";
} else {
    echo "Não é um número primo.\n";
}
?>