<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p>V ou F</p>";
var_dump(true);
echo "<br>";
var_dump(!true);

echo "<p>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true); // true
var_dump(true && false); // false
var_dump(false and true); // false
var_dump(false and false); // false

echo "<p>Tabela verdade 'OR' (OU)</p><hr>";
var_dump(true || true); //true
var_dump(true || false); //true
var_dump(false or true); //true
var_dump(false or false); //true

echo "<p>Tabela verdade 'XOR' (OU exclusivo)</p><hr>";
var_dump(true xor true); //false
var_dump(true xor false); //true
var_dump(false != true); //true
var_dump(false != false); //false

?>
<style>

p {
    margin-bottom: 0px;
    font-weight: bold;
}

hr {
    margin-bottom: 0px;
}

</style>