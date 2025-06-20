<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA . '<br>';
var_dump($numeroA);
echo '<br>';

$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';

unset($somaDosNumeros);
echo '<br>';
echo !isset($somaDosNumeros);


$variavel = 10;
echo '<br>' . $variavel;

$variavel = "agora sou uma string";
echo '<br>' . $variavel;

// Nomes de variável

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar!
// $6var = 'valida';
// $%var = 'valida';]
// $var% = 'valida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
