<?php

require_once("Guitarra.php");

class Baixo extends Guitarra{
    
    private string $tipoCaptador;

    public  function getTipo(){
        return "B";
    }

    public function __toString()
    {
        $dados = InstrumentoCorda::__toString();
        $dados .= $this->getTipoCaptador();

        return $dados;
    }

    /**
     * Get the value of tipoCaptador
     */
    public function getTipoCaptador(): string
    {
        return $this->tipoCaptador;
    }

    /**
     * Set the value of tipoCaptador
     */
    public function setTipoCaptador(string $tipoCaptador): self
    {
        $this->tipoCaptador = $tipoCaptador;

        return $this;
    }
}
