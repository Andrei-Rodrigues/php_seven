<div class="titulo">Membros estáticos</div>

<?php

class A {
    public $naoStatic = 'Variavel de instancia';
    public static $static = 'Variavel de classe (estatica)';

    public function mostrarA() {
        echo "Não estática = $this->naoStatic<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        //echo "Não estática = $this->naoStatic<br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

$objeto = new A();
$objeto->mostrarA();
//$objeto->mostrarStaticA();
A::mostrarStaticA();