<?php

require_once("Espaco.php");

class PontoTuristico extends Espaco
{
    private int $duracaoVisita;

    public function __construct($n, $e, $dv)
    {
        $this->nome = $n;
        $this->endereco = $e;
        $this->duracaoVisita = $dv;
    }

    public function getDadosPontoTuristico()
    {
        return "Nome do Ponto Turistico: " . $this->nome . "\nEndereço do Ponto Turistico: " . $this->endereco . "\nDuração da visita (em dias): " . $this->duracaoVisita . "\n";
    }

    public function getDuracaoVisita(): int
    {
        return $this->duracaoVisita;
    }

    public function setDuracaoVisita(int $duracaoVisita): self
    {
        $this->duracaoVisita = $duracaoVisita;

        return $this;
    }
}