<div class="titulo">Desafio Equação</div>

<?php


$dividendo1 = (6 * (3+2)) ** 2;
$divisor1 = 3*2;
$resultadoPrimeiraDivisao = $dividendo1 / $divisor1;

$dividendo2 = (1 - 5) * (2-7);
$divisor2 = 2;
$resultadoSegundaDivisao = ($dividendo2 / $divisor2) ** 2;

$resposta = (($resultadoPrimeiraDivisao - $resultadoSegundaDivisao) ** 3);
$divisor3 = 10 ** 3;
$resultadoTerceiraDivisao = $resposta / $divisor3;
echo 'Resposta final ' . $resultadoTerceiraDivisao;