<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    [
        "nome" => "Jose",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"

    ],
];

// print_r($dados);

// echo '<br>';
// echo $dados[0]['idade'];
// echo '<br>';
// echo $dados[1]['idade'];

// echo '<br>';
$dados [] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

// print_r($dados);

$dados[2]["vizinho"] = "Chaves";
// echo '<br>';
// print_r($dados);

unset($dados[1]);
// echo '<br>';
print_r($dados);