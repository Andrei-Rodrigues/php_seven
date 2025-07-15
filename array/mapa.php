<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);
echo '<br>';
$dados["idade"] = 30;
print_r($dados);
echo '<br>';
echo "Tenho $dados[idade] anos e peso $dados[peso]kg, minha cor preferida é $dados[cor]";
echo '<br>';
$dados["texto"] = "testando adicao";
print_r($dados);