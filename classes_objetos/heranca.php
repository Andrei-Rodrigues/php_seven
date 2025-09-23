<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) {
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo 'Pessoa foi criada <br>';
    }

    function __destruct() {
        echo "pessoa $nome diz tchau";
    }

    public function apresentar() {
        echo "$this->nome, $this->idade anos <br>"  ;
    }

}

class login extends Pessoa {

    public $login;

    function __construct($nome, $idade, $login) {        
        //$this->nome = $nome;
        //$this->idade = $idade;
        parent::__construct($nome, $idade); 
        $this->login = $login;
        echo "Usuário foi criado <br>";
    }

    function __destruct() {
        echo "login $this->login diz tchau <br>";
    }

    function apresentar() {
        echo "@$this->login ";
        parent::apresentar();            
    }
}

$login = new login("Andrei", 25, "andreiUser");
$login->apresentar();
unset($login);