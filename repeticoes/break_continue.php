<div class="titulo">Break/Continue</div>

<?php

$contador = 10;

for(;;){
    echo "$contador <br>";
    $contador++;
    if($contador > 15){
        break;
    }
}

echo "<hr>";

for(;;){
    $contador++;
    if($contador % 2 === 1){
        continue;
    }
    echo "$contador ";
    if($contador >= 30){
        break;
    }
}

echo "Fim";


echo "<hr>";

foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 5) break;
    if($valor % 2 === 0) continue;
    echo "$valor <br>";
}

echo "Fim";