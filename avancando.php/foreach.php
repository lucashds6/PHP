<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Lucas', 
        'saldo' => 1000
    ], 
    12345648911 => [
        'titular' => 'Matheus', 
        'saldo' => 10000
    ],
    12325678910 => [
        'titular' => 'André', 
        'saldo' => 300
    ]
    ];

$contasCorrentes[12345637811] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];    

foreach ($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL;
}

?>