<div class="titulo">Construtor e destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'Construtor criado <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'Objeto destruido';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

$pessoa1 = new Pessoa("Andrei Rodrigues", 25);
$pessoa1->apresentar();

$pessoa2 = new Pessoa("Lucas Rodrigues", 35);
$pessoa2->apresentar();
$pessoa2 = null;