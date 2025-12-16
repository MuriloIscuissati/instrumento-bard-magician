<?php

require_once("Guitarra.php");

class Violao extends Guitarra{
    
    private string $tipoCorda;
    private string $tipoViolao;

    public  function getTipo(){
        return "V";
    }

    public function __toString(){

        $dados = InstrumentoCorda::__toString();
        $dados .= $this->getTipoCorda() . " | ";
        $dados .= $this->getTipoViolao() . " | ";

        return $dados;
    }
    


    /**
     * Get the value of tipoCorda
     */
    public function getTipoCorda(): string
    {
        return $this->tipoCorda;
    }

    /**
     * Set the value of tipoCorda
     */
    public function setTipoCorda(string $tipoCorda): self
    {
        $this->tipoCorda = $tipoCorda;

        return $this;
    }

    /**
     * Get the value of tipoViolao
     */
    public function getTipoViolao(): string
    {
        return $this->tipoViolao;
    }

    /**
     * Set the value of tipoViolao
     */
    public function setTipoViolao(string $tipoViolao): self
    {
        $this->tipoViolao = $tipoViolao;

        return $this;
    }
}
