<?php

$altura = 1.80;
$peso = 70;

$resultado = $peso / ($altura ** 2 );

if ($resultado < 18.5){
    echo "Seu Imc deu $resultado. está abaixo do peso.";
}else if ($resultado <= 24.9){
    echo "Seu Imc deu $resultado." . PHP_EOL . "Está com peso normal";
}else if($resultado < 29.9){
    echo "Seu Imc deu $resultado. Está com sobrepeso";
}else{
    echo "Seu Imc deu $resultado. Está com obesidade grau 1";
}

?>