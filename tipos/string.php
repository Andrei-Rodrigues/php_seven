<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação

echo 'Nós também' . ' somos';
echo '<br>' , 'tambem aceito' , ' virgulas';
echo '<br>';
echo "'teste'" . ' "teste"';
echo '<br>';
print('<br> tambem existe a funcao print');
echo '<br>';
print '<br> tambem existe a funcao print';
echo '<br>';

// Algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtoupper('minimizado');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('só a primeira letra');
echo '<br>' . mb_strlen('eu também', 'utf-8');
echo '<br>' . substr('só uma parte mesmo', 7, 6); //parte
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso isso');