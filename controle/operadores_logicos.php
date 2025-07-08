<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>V ou F</p>";
var_dump(true);
echo "<br>";
var_dump(!true);

echo "<p class='divisao'>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true); // true
var_dump(true && false); // false
var_dump(false and true); // false
var_dump(false and false); // false

echo "<p class='divisao'>Tabela verdade 'OR' (OU)</p><hr>";
var_dump(true || true); //true
var_dump(true || false); //true
var_dump(false or true); //true
var_dump(false or false); //true

echo "<p class='divisao'>Tabela verdade 'XOR' (OU exclusivo)</p><hr>";
var_dump(true xor true); //false
var_dump(true xor false); //true
var_dump(false != true); //true
var_dump(false != false); //false

echo "<p class='divisao'>Exemplo</p><hr>";

$idade = 67;
$sexo = 'M';
$pagouPrevidencia = true;
$podeAposentar = $pagouPrevidencia && (

    ($idade <= 60 && $sexo === 'F') || 
    ($idade >= 65 && $sexo === 'M')
);

echo '<br>';

if ($podeAposentar && $sexo === 'F') {
    echo "Pode se aposentar - $sexo";
} else if ($podeAposentar && $sexo === 'M') {
    echo "Pode se aposentar - $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco';
}