<?php

abstract class InstrumentoCorda{

    //Atributos
    protected int $id;
    protected int $qtdCorda;
    protected string $escala;
    protected string $nome;
    protected string $fabricante;





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
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

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
