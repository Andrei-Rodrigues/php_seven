<div class="titulo">Operadores Relacionais</div>

<?php 
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

echo "<br>";

var_dump(111 == "111"); // true
var_dump(111 === "111"); // false
var_dump(111 != "111"); // false
var_dump(111 !== "111"); // true

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";

$idade = 75;

if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo "<p class='divisao'>Spaceship</p><hr>";

var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo "<p class='divisao'>Spaceship</p><hr>";

var_dump(!!35);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
