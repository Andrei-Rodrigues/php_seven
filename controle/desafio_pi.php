<div class="titulo">Desafio PI</div>

<?php

// Considerar os dois valores de pi iguais

echo pi();
$pi = 3.14;

echo "<br>$pi<br>";

$diferencaPi = $pi - pi();

if($diferencaPi <= 0.01){
    echo "Os valores são iguais<br>";
}else {
    echo "Os valores não são iguais<br>";
}