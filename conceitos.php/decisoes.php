<?php

    $idade = 19;
    $numeroDePessoas = 1;

    echo "Você só pode entrar se tiver a partir de 18 anos ou ";
    echo "a partir de 16 anos acompanhado" . PHP_EOL;

     //($idade == 18 || $idade > 18) 
     //($idade == 18 or $idade > 18) 
     //($idade >= 18 and $nome == 'Lucas' )
     //($idade >= 18 && $nome == 'Lucas' )

    if ($idade >= 18)
     
        {
            echo "Você tem $idade anos. Pode entrar sozinho";

    }else if ($idade >= 16 && $numeroDePessoas > 1){
            echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
    }else{
            echo "Você só tem $idade anos. Você não pode  entrar.";
            echo PHP_EOL . "É uma pena";
         }
        

        echo PHP_EOL;
        echo "ADEUS!!!!";
?>