<div class="titulo">Inteface</div>

<?php

interface Animal {
    
    function respirar();

}

interface Mamifero {
    
    function mamar();

}

interface Felino {
    function correr();
}

interface Canino extends Animal, Mamifero{
    
    function latir(): string;
}

class Cachorro implements Canino{

    function respirar()
    {
        echo 'O cachorro está respirando';
    }

    function latir(): string
    {
        return 'Auauauau';
    }

    function mamar(): string
    {
        return 'Irei usar leite';
    }

    function correr(): string
    {
        return 'Correndoooo';
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Animal);