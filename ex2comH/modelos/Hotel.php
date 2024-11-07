<?php

require_once("Espaco.php");

class Hotel extends Espaco
{
    private int $numeroEstrelas;
    private bool $cafeIncluso;

    public function __construct($n, $e, $ne, $ci)
    {
        $this->nome = $n;
        $this->endereco = $e;
        $this->numeroEstrelas = $ne;
        $this->cafeIncluso = $ci;
    }

    public function getDadosHotel()
    {
        if($this->cafeIncluso == true)
        {
            $stringCafe = "Sim";
        }else{
            $stringCafe = "Não";
        }
        
        return "Nome do Hotel: " . $this->nome . "\nEndereço do Hotel: " . $this->endereco . "\nNúmero de Estrelas: " . $this->numeroEstrelas . "\nCafé Incluso: " . $stringCafe . "\n";
    }

    public function getNumeroEstrelas(): int
    {
        return $this->numeroEstrelas;
    }

    public function setNumeroEstrelas(int $numeroEstrelas): self
    {
        $this->numeroEstrelas = $numeroEstrelas;

        return $this;
    }

    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}