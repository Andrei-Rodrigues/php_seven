<div class="titulo"></div>

<?php

//Adivinhar o resultado do array

$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

echo "Array ([0] => 8 [4] => 2 [3] => 3 [a] => 4 [5] => 5 [9] => 6 [06] => 7)";
echo "<br>";
echo "------<br>";
print_r($lista);