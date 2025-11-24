<div class="titulo">Polimorfismo</div>

<?php

Abstract class Comida {
    public float $peso;
}

class Arroz extends Comida {

}

class Feijao extends Comida {
    
}

class Sorvete extends Comida {
    
}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    function comer($comida) {
        $this->peso += $comida->peso;

    }
}

$comida1 = new Arroz();
$comida1->peso = 0.45;

$pessoa1 = new Pessoa(83.45);
$pessoa1->comer($comida1);

echo $pessoa1->peso;

echo "<br>";

$comida2 = new Feijao();
$comida2->peso = 1.4;

$pessoa2 = new Pessoa(90);
$pessoa2->comer($comida2);
echo $pessoa2->peso;