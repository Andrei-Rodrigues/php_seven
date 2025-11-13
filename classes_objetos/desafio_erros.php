<div class="titulo">Desafio erros</div>

<?php

Interface Template {
    function metodo1();
    function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    function metodo1() { // 3 erro

    }

    function metodo2($parametro) { // 4 erro

    }
    
}

class Classe extends ClasseAbstrata {
    function __construct($parametro) { // 6 erro
            
    }

    public function metodo3() { // 5 erro
        echo "Estou funcionando";
    }

}

$exemplo = new Classe('parametro'); // 1 erro
$exemplo->metodo3(); // 2 erro


