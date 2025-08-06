<div class="titulo">Closure & callable</div>

<?php

$soma1 = function ($a, $b) {
    return $a + $b;
};

$soma1(1, 2);
echo (is_callable($soma1) ? "Sim" : "Não") . "<br>";

function executar($a, $b, $operacao, callable $funcao) {
    $resultado = $funcao($a, $b);
    echo ("$a $operacao $b = $resultado") . "<br>";
}

executar(2, 3, '+', $soma1);