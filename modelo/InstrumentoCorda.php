<?php

abstract class InstrumentoCorda{

    //Atributos
    protected int $id;
    protected int $qtdCorda;
    protected string $escala;
    protected string $modelo;
    protected string $fabricante;

   
    public abstract function getTipo();

    public function __toString(){
        $dados = $this->getId() . " | ";
        $dados .= $this->getQtdCorda() . " | ";
        $dados .= $this->getEscala() . " | ";
        $dados .= $this->getModelo() . " | ";
        $dados .= $this->getFabricante() . " | ";
        

        return $dados;
    }
    //Gets & Sets
    

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of qtdCorda
     */
    public function getQtdCorda(): int
    {
        return $this->qtdCorda;
    }

    /**
     * Set the value of qtdCorda
     */
    public function setQtdCorda(int $qtdCorda): self
    {
        $this->qtdCorda = $qtdCorda;

        return $this;
    }

    /**
     * Get the value of escala
     */
    public function getEscala(): string
    {
        return $this->escala;
    }

    /**
     * Set the value of escala
     */
    public function setEscala(string $escala): self
    {
        $this->escala = $escala;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * Set the value of nome
     */
    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of fabricante
     */
    public function getFabricante(): string
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     */
    public function setFabricante(string $fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }

}
