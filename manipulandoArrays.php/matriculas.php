<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria'  
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];



$alunos2022 = [...$alunos2021, 'Carlos Vicinius', ...$novosAlunos];

var_dump($alunos2022)



?>