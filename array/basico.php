<div class="titulo">Array</div>

<?php

$lista = array(1, 2, 3.4, 4, 5, "texto");

print_r($lista);
echo '<br>';
echo "$lista[5]";
echo '<br>';
$lista[5] = "novo texto";
print_r($lista);