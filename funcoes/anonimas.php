<div class="titulo">Funções anônimas</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

$multiplicar = function ($a, $b) {
    return $a * $b;
};

echo $soma(1, 2,) . "<br>";

function executar($a, $b, $operacao, $funcao) {
    $resultado = $funcao($a, $b);
    echo ("$a $operacao $b = $resultado") . "<br>";
}

executar(2, 3, '+', $soma);
executar(2, 3, '*', $multiplicar);