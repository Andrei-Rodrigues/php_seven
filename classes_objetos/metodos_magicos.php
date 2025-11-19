<div class="titulo">Metodos mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo "Contrutor foi chamado<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "Destruindo a classe";
    }

    function __toString() {
        return "$this->nome tem $this->idade anos";
    }

    function apresentar() {
        echo "$this" . "<br>";
    }

    function __get($atribNaoD) {
        echo "aqui esta o atributo nao declarado = $atribNaoD";
    }

    function __set($atribNaoD, $setNovoValor) {
        echo "alterando $atribNaoD para $setNovoValor<br>";
    }

    function __call($metodo, $parametros) {
        echo "tentando executar o $metodo com os seguintes parametro = ";
        print_r($parametros);
    }
}

$pessoa1 = new Pessoa('Andrei', 25);
//$pessoa1->apresentar();
// var_dump($pessoa1);
$pessoa1->desconhecido = "conhecido";
$pessoa1->exec('teste', 2, 'mais um teste', true, [1, 2, 3]);