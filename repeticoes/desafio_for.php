<div class="titulo">Desafio For</div>

<?php

// Printar isso com o laço for:
//     #
//     ##
//     ###
//     ####
//     #####
// 1) Pode usar incremento $i++
// 2) Não pode usar incremento $i++

$impressao = '';
for($contador = 1; $contador <= 5; $contador++){
    $impressao .= "#";
    echo "$impressao<br>";
}

echo "<hr>";

for($impressao2 = "#"; $impressao2 != "######"; $impressao2 .= "#") {
    echo "$impressao2<br>";
}