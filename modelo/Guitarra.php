<?php

require_once("InstrumentoCorda.php");

class Guitarra extends InstrumentoCorda{

    protected int $qtdCasas;
    protected int $qtdCaptadores;

    public  function getTipo(){
        return "G";
    }

    public function __toString()
    {
        $dados = parent::__toString();
        $dados .= $this->getQtdCasas() . " | ";
        $dados .= $this->getQtdCaptadores();

        return $dados;
    }


    /**
     * Get the value of qtdCasas
     */
    public function getQtdCasas(): int
    {
        return $this->qtdCasas;
    }

    /**
     * Set the value of qtdCasas
     */
    public function setQtdCasas(int $qtdCasas): self
    {
        $this->qtdCasas = $qtdCasas;

        return $this;
    }

    /**
     * Get the value of qtdCaptadores
     */
    public function getQtdCaptadores(): int
    {
        return $this->qtdCaptadores;
    }

    /**
     * Set the value of qtdCaptadores
     */
    public function setQtdCaptadores(int $qtdCaptadores): self
    {
        $this->qtdCaptadores = $qtdCaptadores;

        return $this;
    }
}
