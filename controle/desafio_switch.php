<div class="titulo">Desafio Switch</div>


<form action="#" method="post">
    <input type="number" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metros-km">Metros > Km</option>
        <option value="km-metros">Km > Metros</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

$mensagem = '';
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$valor = floatval($_POST['param']);
$conversao = $_POST['conversao'];

switch ($conversao) {
    case 'km-milha':
        $resultado = $valor * FATOR_KM_MILHA;
        echo "$resultado milhas";
        break;
    case 'milha-km':
        $resultado = $valor * FATOR_KM_MILHA;
        echo "$resultado quilometros";
        break;
    case 'metros-km':
        $resultado = $valor / FATOR_METRO_KM;
        echo "$resultado quilometros";
        break;
    case 'km-metros':
        $resultado = $valor * FATOR_METRO_KM;
        echo "$resultado metros";
        break;
    case 'celsius-fahrenheit':
        $resultado = ($valor * 9/5) + 32;
        echo "$resultado celsius";
        break;
    case 'fahrenheit-celsius':
        $resultado = ($valor - 32) * 5/9;
        echo "$resultado fahrenheit";
        break;
    default:
        $mensagem = "Nenhum valor calculado";
}

echo "<p>$mensagem</p>";