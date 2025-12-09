<?php

require_once("modelo/InstrumentoCorda.php");
require_once("modelo/Guitarra.php");
require_once("modelo/Violao.php");
require_once("modelo/Baixo.php");


class InstrumentoCordaDao{
    public function cadastrarInstrumento (InstrumentoCorda $instrumentoCorda){

        $sql = "INSERT INTO instrumentos 
                (tipo, qtdCorda, escala, modelo, fabricante, qtdCasas, qtdCaptadores, tipoCorda, tipoViolao, tipoCaptador)
                values
                (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);

        if($instrumentoCorda instanceof Guitarra){
            $stmt->execute(array(
                                $instrumentoCorda->getTipo(),
                                $instrumentoCorda->getQtdCorda(),
                                $instrumentoCorda->getEscala(),
                                $instrumentoCorda->getModelo(),
                                $instrumentoCorda->getFabricante(),
                                $instrumentoCorda->getQtdCasas(),
                                $instrumentoCorda->getQtdCaptadores(),
                                NULL,
                                NULL,
                                NULL,
                            ));
        }

        elseif($instrumentoCorda instanceof Violao){
            $stmt->execute(array(
                                $instrumentoCorda->getTipo(),
                                $instrumentoCorda->getQtdCorda(),
                                $instrumentoCorda->getEscala(),
                                $instrumentoCorda->getModelo(),
                                $instrumentoCorda->getFabricante(),
                                $instrumentoCorda->getQtdCasas(),
                                $instrumentoCorda->getQtdCaptadores(),
                                $instrumentoCorda->getTipoCorda(),
                                $instrumentoCorda->getTipoViolao(),
                                NULL));
        }

        elseif($instrumentoCorda instanceof Baixo){
            $stmt->execute(array(
                                $instrumentoCorda->getTipo(),
                                $instrumentoCorda->getQtdCorda(),
                                $instrumentoCorda->getEscala(),
                                $instrumentoCorda->getModelo(),
                                $instrumentoCorda->getFabricante(),
                                $instrumentoCorda->getQtdCasas(),
                                $instrumentoCorda->getQtdCaptadores(),
                                NULL,
                                NULL,
                                $instrumentoCorda->getTipoCaptador()));
        }
    }

    public function listar(){
        $sql = "SELECT * FROM instrumentos";

        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $dados = $stmt->fetchAll();

        $instrumentos = $this->map($dados);
        return $instrumentos;
    }

    private function map($dados){
        $instrumentos = array();

        foreach($dados as $d){
            $instrumento = null;

            if($d['tipo'] == 'G'){
                $instrumento = new Guitarra();
            }

            elseif($d['tipo'] == 'V'){
                $instrumento = new Violao();
                $instrumento->setTipoCorda($d['tipoCorda']);
                $instrumento->setTipoViolao($d['tipoViolao']);
            }

            else{
                $instrumento = new Baixo();
                $instrumento->setTipoCaptador($d['tipoCaptador']);
            }

            $instrumento->setQtdCorda($d['qtdCorda'])->setEscala($d['escala'])->setModelo($d['modelo'])->setFabricante($d['fabricante']);
            $instrumento->setQtdCasas($d['qtdCasas'])->setQtdCaptadores($d['qtdCaptadores']);

            array_push($instrumentos, $instrumento);
        }

        return $instrumentos;
    }
}