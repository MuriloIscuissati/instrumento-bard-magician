<?php

require_once("Guitarra.php");

class Baixo extends Guitarra{
    
    private string $tipoCaptador;

    public  function getTipo(){
        return "B";
    }

    public function __toString()
    {
        $d = " Id : " . $this->id . " \n Cordas quantidade: " . $this->qtdCorda . "\n Escala : " . $this->escala . "\n modelo : " . $this->modelo . "\n Fabricante : " . $this->fabricante . "\n" . "Qtd Casas: " . $this->qtdCasas . "Qtd Captadores: " . $this->qtdCaptadores . "\n Tipo Captador: " . $this->tipoCaptador;

        return $d;
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