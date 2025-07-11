<div class="titulo">Switch</div>

<?php

$categoria = "Luxo";
$carro = '';
$preco = 0.0;

if ($categoria === "Luxo") {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === "SUV") {
    $carro = 'Renegade';
    $preco = 250000;
} else if ($categoria === "Sedan") {
    $carro = 'Etios';
    $preco = 550000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro - Categoria: $categoria - Valor: $preco</p>";

$categoria = "Sedan";
$carro = '';
$preco = 0.0;
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        
        break;
    case 'suv':
        $carro = 'Renegade';
        $preco = 250000;
        break;
        
    case 'sedan':
        $carro = 'Etios';
        $preco = 550000;
        break;
        
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro - Categoria: $categoria - Valor: $preco</p>";