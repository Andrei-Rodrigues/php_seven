<div class="titulo">Foreach</div>

<?php

$diasSemana = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

foreach($diasSemana as $valor){
    echo "$valor <br>";
}

foreach($diasSemana as $indice => $valor){
    echo "$indice => $valor <br>";
}

$matrix = [
    ["a", "b", "c"],
    ["d", "e", "f"],
];

foreach($matrix as $linha) {
    // echo "$linha";
    foreach($linha as $result){
        echo "$result ";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach($numeros as $dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}