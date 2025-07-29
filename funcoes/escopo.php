<div class="titulo">Função escopo</div>

<?php

function imprimirMensagens() {
    echo "Olá";
    echo "até a próxima<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel<br>";
}

echo "Antes da função: $variavel<br>";
trocaValor();
echo "Depois da função: $variavel<br>";

echo "<br>";

function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel<br>";
}

echo "Antes da função: $variavel<br>";
trocaValorDeVerdade();
echo "Depois da função: $variavel<br>";