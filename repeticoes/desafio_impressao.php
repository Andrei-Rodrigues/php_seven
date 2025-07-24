<div class="titulo">Desafio impressão</div>

<?php

// Enunciado
// Imprima apenas os valores do array que contém indice par
// Desafio adicional: Resolver com for e foreach
// Valores esperados: AAA, CCC, EEE

$letras = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
];

for($indice= 0; $indice < count($letras); $indice++){    
    if($indice % 2 === 0){
        echo"$letras[$indice] <br>";
        continue;
    }
}

echo "<hr>";

foreach($letras as $indice => $letra){    
    if($indice % 2 === 0){
        echo "$letra <br>";
    }
}