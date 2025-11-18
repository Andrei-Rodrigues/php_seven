<div class="titulo">Traits #01</div>

<?php

trait validacao {
    public $a = "Valor a";
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validaMelhor {
    public $b = "Valor b";
    public $c = "Valor c";
    
    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }

    public function imprimirC() {
        echo "$this->c";
    }

}

class Usuario {
    use validacao, validaMelhor;

}

$user1 = new Usuario();
var_dump($user1->validarString(' '));
echo '<br>';
var_dump($user1->validarStringMelhor(' '));
echo '<br>';
echo $user1->a, "<br>" ,$user1->b;
echo '<br>';
echo $user1->c;