<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria', 
        'saldo' => 10000
    ], 
    '123.456.489-11' => [
        'titular' => 'Alberto', 
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vicinius', 
        'saldo' => 100
    ]
    ];

    $contasCorrentes['123.456.789-10'] = sacar(
        $contasCorrentes['123.456.789-10'],
         valorASacar: 500
        );

    $contasCorrentes['123.456.489-11'] = sacar(
        $contasCorrentes['123.456.489-11'],
         valorASacar:200
        );  
         
    $contasCorrentes['123.256.789-12'] = depositar(
        $contasCorrentes['123.256.789-12'],
        valorADepositar:900
        );

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem(
        mensagem:"$cpf {$conta['titular']} {$conta['saldo']}"
    );
}


?>