<?php

require_once("Guitarra.php");

class Violao extends Guitarra{
    
    private string $tipoCorda;
    private string $tipoViolao;

    public  function getTipo(){
        return "V";
    }

    public function __toString(){


        $d = " Id : " . $this->id . " \n Cordas quantidade: " . $this->qtdCorda . "\n Escala : " . $this->escala . "\n modelo : " . $this->modelo . "\n Fabricante : " . $this->fabricante . "\n" . "Qtd Casas: " . $this->qtdCasas . "Qtd Captadores: " . $this->qtdCaptadores . "\n" . $this->tipoCorda . "Tipo Violão: " . $this->tipoViolao;

        return $d;
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
