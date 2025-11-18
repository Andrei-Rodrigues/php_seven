<div class="titulo">Traits #02</div>

<?php

trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);
    }    
}

class Usuario {
    use validacao, validacaoMelhor{
        // validacaoMelhor::validarString insteadOf validacao;
        validacao::validarString insteadOf validacaoMelhor;

        validacao::validarString as validacaoMelhor;
    }
}

$user1 = new Usuario();
var_dump($user1->validacaoMelhor('a'));