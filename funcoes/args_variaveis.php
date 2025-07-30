<div class="titulo">Argumentos variáveis</div>

<?php

function somar($a, $b) {
    return $a + $b;
}

// echo somar(5, 5);

echo "<br>";

function somar2(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

// echo somar2(1, 2, 3, 4, 5);

echo "<br>";

$array = [2, 2, 3, 4, 5];
// echo somar2(...$array);

echo "<br>";


function membros($titular, ...$dependentes){
    echo "O titular é $titular<br>";    
    foreach($dependentes as $dep){
        echo "Dependente $dep<br>";
    }
}

$dependentes = ['Luci', 'Lucas', 'André'];
$titular = 'Andrei';
echo membros($titular, ... $dependentes);
