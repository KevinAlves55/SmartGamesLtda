<?php

/*
    
    Objetivo: Buscar/Listar os dados de jogos
    Data: 27/02/2022
    Autor: Kevin
    
*/

    require_once(SRC.'dataBase/listarJogos.php');

    function exibirJogos() {

        $dados = listarJogos();

        return $dados;

    }

    function criarArray($objeto) {
        
        $i = (int) 0;

        while ($rsDados = mysqli_fetch_assoc($objeto)) {

            $arrayDadosJogos[$i] = array(

                'id' => $rsDados['idJogos'],
                'nome' => $rsDados['nome'],
                'imagem' => $rsDados['imagem'],
                'preco' => $rsDados['preco']

            );

            $i++;

        }

        if (isset($arrayDadosJogos)) {

            return $arrayDadosJogos;

        } else {

            return false;

        }

    }

    function criarJson($arrayDadosJogos) {

        header('content-type:application/json');

        $listarJson = json_encode($arrayDadosJogos);

        if (isset($listarJson)) {

            return $listarJson;

        } else {

            return false;

        }

    }

    function exibirJogoPorId($id) {

        $dados = listarJogoPorId($id);

        return $dados;

    }

    function criarArrayId($objeto) {
        
        $i = (int) 0;

        while ($rsDados = mysqli_fetch_assoc($objeto)) {

            $arrayDadosJogosId[$i] = array(

                'id' => $rsDados['idJogos'],
                'nome' => $rsDados['NomeJogo'],
                'descricao' => $rsDados['descricao'],
                'preco' => $rsDados['preco'],
                'plataformas' => $rsDados['Plataformas'],
                'lojas' => $rsDados['Lojas']

            );

            $i++;

        }

        if (isset($arrayDadosJogosId)) {

            return $arrayDadosJogosId;

        } else {

            return false;

        }

    }

    function criarJsonId($arrayDadosJogosId) {

        header('content-type:application/json');

        $listarJson = json_encode($arrayDadosJogosId);

        if (isset($listarJson)) {

            return $listarJson;

        } else {

            return false;

        }

    }


?>