<div class="titulo">Desafio Palindromo</div>

<form action="#" method="post">
    <label for="">Verifique se é um palindromo</label>
    <input type="text" name="palindromo">
    <button>Verificar</button>
</form>

<?php

verificarPalindromo($palavra = $_POST['palindromo']);
verificarPalindromo2($palavra = $_POST['palindromo']);

function verificarPalindromo($palavra) {
    $invertida = '';
    for($i = strlen($palavra); $i >= 0; $i--){
        $invertida  = $invertida.  $palavra[$i];
    }
    
    if($invertida !== $palavra){
        echo "A palavra não é um palindromo, palavra original: $palavra / palavra invertida: $invertida <br>";
    } else {
        echo "A palavra é um palindromo, palavra original: $palavra / palavra invertida: $invertida <br>";
    }
}

echo "<br>";

function verificarPalindromo2($palavra) {
    if ($palavra !== strrev($palavra)) {
        echo "A palavra não é um palindromo, palavra original: $palavra / palavra invertida: " . strrev($palavra) . "<br>"
    } else {
        echo "A palavra é um palindromo, palavra original: $palavra / palavra invertida: " . strrev($palavra) . "<br>"
    }
}