<?php

//$contador = $contador + 1;
//$contador += $contador;
//$contador ++;


for ($contador = 1; $contador <= 15; $contador ++) 
{
    //if($contador != 13)
    if($contador == 13){
        continue;
        //break;
    }
    echo "#$contador" . PHP_EOL;
    
}


?>
