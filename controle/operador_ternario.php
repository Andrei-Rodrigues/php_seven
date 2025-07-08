<div class="titulo">Operador ternário</div>

<?php

$idade = 65;
$status;

if ($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo $status;
echo '<br>';
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';

echo $status;