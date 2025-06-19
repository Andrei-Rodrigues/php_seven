<div class="titulo">Desafio String</div>


<?php 

// Enunciado
// Avaliando os métodos da documentacao da string, qual os metodos
// que a posicao do texto 'abc' na string '!AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc'). '<br>';
echo stripos('!AbcaBcabc', 'abc'). '<br>';

echo stripos(strtolower('!AbcaBcabc'), strtolower('ABC'));



?>