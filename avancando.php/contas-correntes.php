<?php

$conta1 = [
    'titular' => 'Lucas', 
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Matheus', 
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'André', 
    'saldo' => 300
];
$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}

?>