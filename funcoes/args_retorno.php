<div class="titulo">Argumentos & retorno</div>

<?php

function obterMensagem() {
    return "Seja bem vindo(a)! <br>";
}

obterMensagem();
$m = obterMensagem();
echo "$m";
var_dump(obterMensagem());

function obterMensagemComNOme($nome) {
    return "Bem vindo, {$nome}! <br >";
}

echo obterMensagemComNOme('Andrei');

function soma($a, $b) {
    return $a + $b;
}

$x = 3;
$y = 5;

echo "<br>" . soma(5, 5);
echo "<br>" . soma($x, $y);

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo "<br>", $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocaValorDeVerdade($variavel,500);
echo "<br>", $variavel;