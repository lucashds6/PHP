<?php

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

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta ['saldo']) {
        exibeMensagem(mensagem: "Você não pode sacar");
   } else {
    $conta ['saldo'] -= $valorASacar;
   }

   return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem(mensagem:"Depositos precisam ser positivos");
    }
    
    return $conta;
    
}

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
    exibeMensagem(mensagem:$cpf . " " .  $conta['titular'] . ' ' . $conta['saldo']);
}


?>