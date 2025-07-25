<div class="titulo">While/Do While</div>

<?php

const VALOR_LIMITE = 5;

echo "Utilizando o while <br>";
$contador = 0;

while ($contador < VALOR_LIMITE){
    echo "While $contador <br>";    
    $contador++;
}

echo "<hr>";
echo "Utilizando o do-while <br>";

$contador = 0;
do {
    echo "Do-while $contador <br>";
    $contador++;
} while ($contador < VALOR_LIMITE);