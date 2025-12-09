<?php

require_once("util/Conexao.php");
require_once("modelo/InstrumentoCorda.php");
require_once("modelo/Guitarra.php");
require_once("modelo/Baixo.php");
require_once("modelo/Violao.php");
require_once("dao/InstrumentoCordaDao.php");

// $pdo = Conexao::getConexao();
// print_r($pdo);
// exit;

do {
    print "1)Cadastrar Instrumento \n2)Listar Instrumentos \n3)Buscar por ID \n4)Excluir Instrumento \n0)Encerrar Programa: ";
    $resposta = readline();

    switch ($resposta) {
        case 1:
            //Cadastrar
            $instrumento = null;

            print "Qual o tipo do instrumento: 1)Violão \n2)Guitarra \n3)Baixo: ";
            $escolha = readline();

            

            switch ($escolha) {

                case 1:
                    //Violao
                    $instrumento = new Violao();
                    $instrumento->setTipoViolao(readline("Qual o tipo do violão: "));
                    $instrumento->setTipoCorda(readline("Qual o tipo da corda do violão: "));

                    
                    break;

                case 2:
                    //Guitarra
                    $instrumento = new Guitarra();
                    break;

                case 3:
                    //Baixo
                    $instrumento = new Baixo();
                    $instrumento->setTipoCaptador(readline("Qual o tipo do captador do baixo: "));
                    break;

                default:
                    print "Opção inválida.\n";
            }
            
            if($instrumento != null){
                $instrumento->setQtdCorda(readline("Quantas cordas tem o seu instrumento: "));
                $instrumento->setEscala(readline("Qual o tipo da escala do seu instrumento: "));
                $instrumento->setModelo(readline("Qual o modelo do seu instrumento: "));
                $instrumento->setFabricante(readline("Qual o fabricante do seu instrumento: "));
                $instrumento->setQtdCasas(readline("Quantas casas tem seu instrumento: "));
                $instrumento->setQtdCaptadores(readline("Quantos captadores tem seu instrumento: "));

                //Persistir os Dados
                $dao = new InstrumentoCordaDao();
                $dao->cadastrarInstrumento($instrumento);
                print "Instrumento cadastrado com sucesso.\n";
            }

            break;

        case 2:
            //Listar
            $dao = new InstrumentoCordaDao();
            $instrumentos = $dao->listar();

            foreach($instrumentos as $i){
                print $i . "\n";
            }
            break;

        case 3:
            //Buscar por ID

            break;

        case 4:
            //Excluir Instrumento

            break;

        case 0:
            print "Programa Encerrado.../n";
            break;

        default:
            print "Opção Inválida eheheheheh aura+ego.\n\n";
    }
} while ($resposta != 0);
