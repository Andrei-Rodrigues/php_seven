<div class="titulo"></div>

<?php

function somar1($a, $b){
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo somar1(1, 2) . "<br>";
echo somar1(1.7, 2.5) . "<br>";

echo "<hr>";

function somar2(int $a, int $b){
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo somar2(1, 2) . "<br>";
echo somar2(1.7, 2.5) . "<br>";

echo "<hr>";

function somar3($a, $b): int {
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo somar3(1, 2) . "<br>";
echo somar3(1.7, 2.5) . "<br>";
