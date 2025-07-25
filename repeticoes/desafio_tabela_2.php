<div class="titulo">Desafio tabela 2</div>

<form action="#" method="post">
    <div>
        <label for="linhas">Quantidade de linhas</label>
        <input type="number" name="linhas" id="linhas" required>
    </div>
    <br>
    <div>
        <label for="colunas">Quantidade de colunas</label>
        <input type="number" name="colunas" id="colunas" required>
    </div>
    <button>Enviar</button>
</form>

<table>
<?php

$colunas = intval($_POST['colunas']);
$linhas = intval($_POST['linhas']);

$num = 1;
for($i = 0; $i < $linhas; $i++) {
    echo "<tr>";
    for($j = 0; $j < $colunas; $j++) {
        echo "<td>$num</td>";
        $num++;
    }
    echo "</tr>";
}
?>
</table>


<style>
    form * {
        font-size: 1.8rem;
    }

    form > div {
        margin-bottom: 1px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
    }

    table tr{
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>