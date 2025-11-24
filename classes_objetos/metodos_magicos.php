<div class="titulo">Métodos mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        echo "Construtor foi chamado<br>";
        $this->nome = $nome;
        $this->idade = $idade;        
    }

    public function __destruct() {
        echo "Terminou<br>";
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos de idade<br>";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atributo) {
        echo "Atributo {$atributo} não declarado<br>";
        return 0;
    }

    public function __set($atributo, $novoValor) {
        echo "Alterando $atributo para $novoValor<br>";
        return $nomeCompleto = $novoValor;
        echo $nomeCompleto;
    }

    public function __call($metodo, $parametros) {
        echo "Tentando executar método $metodo com os seguintes parametros: <br>";
        print_r($parametros);
        echo "<br>";
    }
}

$pessoa1 = new Pessoa("Andrei", 25);
// $pessoa1->apresentar();
// echo $pessoa1 . "<br>";
// $pessoa1->nome = "Andre";
// $pessoa1->apresentar();
$pessoa1->nomeCompleto = "Teste";
$pessoa1->exec("andrei", 1);
$pessoa1 = null;