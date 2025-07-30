<div class="titulo">Argumento padrão</div>

<?php

function saudacao($nome = "Senhor", $sobrenome = "Cliente") {
    return "Olá $nome $sobrenome <br>";
}

echo saudacao("Rodrigues");

function anotarPedido($comida, $bebida = "refri") {
    echo "Para comer é $comida <br>";
    echo "Para beber é $bebida <br>";
}

anotarPedido("lasanha", "água");

