<div class="titulo">Comparação Arrays</div>

<?php

$array1 = ["nome" => "Jose", "idade" => 20];
$array2 = ["nome" => "Maria", "idade" => 25];

var_dump($array1 === $array2);

echo "<br>";

var_dump($array1 !== $array2);

echo "<br>";

$array3 = ["idade" => 20, "nome" => "Jose"];
var_dump($array1 == $array3);