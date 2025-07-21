<div class="titulo">Constantes</div>

<?php

const FRUTAS = array('laranja', 'abacaxi');
// FRUTAS[0] = 'banana';
// FRUTAS = 'banana';
print_r(FRUTAS);

echo '<br>';

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
print_r(CARROS["Fiat"]);

echo '<br>';

define('CIDADES', array('Belo Horizonte', 'Recife'));
print_r(CIDADES[0]);
