<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = 'Publico';
    protected $protected = 'Protegido';
    private $private = 'Private';

    public function mostrarA(){
        echo "Class A) Método público = {$this->publico}<br>";
        echo "Class A) Método protegido = {$this->protected}<br>";
        echo "Class A) Método privado = {$this->private}<br>";      
        $this->naoMostrar();  
    }

    protected function mostrarAprotected(){
        echo "Essa é função protegida";
    }

    private function naoMostrar(){
        echo "Essa é uma função privada<br>";
    }
    
}

$a = new A();
$a->mostrarA();

class B extends A {
    public function mostrarB(){
        echo "Class B) Atributo {$this->publico}<br>";
        echo "Class B) Atributo {$this->protected}<br>";            
        parent::mostrarAprotected();
    }
}

echo "<br>";
$b = new B();
$b->mostrarB(); 