<div class="titulo">Desafio operadores lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e sorvete
    - Se apenas um for executado -> TV 32' e sorvete
    - Se nenhum for executado -> fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça:)</label>
        <select name="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
        
    </div>
    <br>
     <div>
        <label for="t2">Trabalho 2 (quinta:)</label>
        <select name="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
        
    </div>
    <br>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

if($_POST['t1'] === "1" AND $_POST['t2'] === "1"){
    echo 'Vamos comprar uma tv de 50 polegadas e tomar sorvete';
} else if ($_POST['t1'] === "1" OR $_POST['t2'] === "1"){
    echo 'Vamos comprar uma tv de 32 polegadas e tomar sorvete';
} else {
    echo 'Vamos ficar em casa, mais saudável';
}

?>
