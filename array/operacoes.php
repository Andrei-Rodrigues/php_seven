<div class="titu">Operações</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "nome" => "maria",
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo "<br>" . is_array($dadosCompletos);
echo "<br>" . count($dadosCompletos);

echo "<br>";

$indice = array_rand($dadosCompletos);

echo "$indice = $dadosCompletos[$indice]";

echo "<br>";