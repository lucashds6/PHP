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
    //unset apaga da memoria
    unset($contasCorrentes['123.456.489-11']);

    titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) {?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>