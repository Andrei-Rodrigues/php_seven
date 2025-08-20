<div class="titutlo">Primeira Classe</div>

<?php

class Cliente {
    public $nome = 'anonimo';
    public $idade = 18;

    public function apresentar() {
        return "Nome {$this->nome} idade {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'joao';
$c1->iade = 28;


$c2 = new Cliente();

echo $c1->apresentar();
echo $c2->apresentar();