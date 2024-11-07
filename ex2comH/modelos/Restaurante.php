<?php

require_once("Espaco.php");

class Restaurante extends Espaco
{
    private string $tipoComida;

    public function __construct($n, $e, $tc)
    {
        $this->nome = $n;
        $this->endereco = $e;
        $this->tipoComida = $tc;
    }

    public function getDadosRestaurante()
    {
        return "Nome do Restaurante: " . $this->nome . "\nEndereço do Restaurante: " . $this->endereco . "\nTipo de Comida: " . $this->tipoComida . "\n";
    }

    public function getTipoComida(): string
    {
        return $this->tipoComida;
    }

    public function setTipoComida(string $tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }
}