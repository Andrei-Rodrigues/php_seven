<div class="titulo">Desafio Classe data</div>

<?php

class Data {
    public $dia = 01;
    public $mes= 01;
    public $ano = 1970;

    public function apresentar(){
        return "$this->dia/$this->mes/$this->ano <br>";
    }

    public function apresentarTexto(){
        $this->dia == 1 ? 'Primeiro' :  $this->dia;
        $nomeMes = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
        $this->mes = $nomeMes[$this->mes - 1];
        return "$this->dia de $this->mes de $this->ano <br>";
    }
}

$data = new Data();
echo $data->apresentar();
echo $data->apresentarTexto();

$dataDif = new Data();
$dataDif->dia = 31;
$dataDif->mes = 07;
$dataDif->ano = 2031;
echo $dataDif->apresentar();
echo $dataDif->apresentarTexto();