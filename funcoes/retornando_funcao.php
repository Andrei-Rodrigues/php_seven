<div class="titulo">Retornando função</div>

<?php

function somar($a) {
    return function($b) use($a){
        return $a + $b;
    };
}

echo somar(3) (4);

$doisMais = somar(2);
echo '<br>' , $doisMais(12);
echo '<br>' , $doisMais(14);
