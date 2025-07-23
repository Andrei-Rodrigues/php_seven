<div class="titulo">Laço for</div>

<?php

for($contador = 1; $contador <= 5; $contador++) {
    echo "$contador <br>";
}

echo "<hr>";

for(; $contador <= 10; $contador++) {
    echo "$contador <br>";
}

echo "<hr>";

for(; $contador <= 15;) {
    echo "$contador<br>";
    $contador++;
}

echo "<br>";

$diasSemana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
print_r($diasSemana);

echo "<br>";

for($i = 0; $i < count($diasSemana);){
    echo " $diasSemana[$i]";
    $i++;
}

echo "<hr>";

$matrix = [
    ["a", "b", "c"],
    ["d", "e", "f"],
];

for($i = 0; $i < count($matrix); $i++){
    for($j = 0; $j < count($matrix[$i]); $j++){
        print_r($matrix[$i][$j]);
    }
}
