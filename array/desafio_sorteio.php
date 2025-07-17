<div class="titulo">Desafio sorteio</div>

<?php

// Printar na tela um nome aleatório a cada carregamento de tela

$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

// Uma maneira de fazer
$aleatorio = array_rand($nomes);
echo "$nomes[$aleatorio]";