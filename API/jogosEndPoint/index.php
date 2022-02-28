<?php

    require_once('vendor/autoload.php');

    $app = new \Slim\App();

    // EndPoint : GET, Retorna todos os jogos do BD
    $app -> get('/jogos', function($request, $response, $args) {

        require_once('constantes/constantes.php');
        require_once('controller/exibiDadosJogos.php');
        
        if ($listarDados = exibirJogos()) {

            if ($listarDadosArray = criarArray($listarDados)) {

                $listarDadosJson = criarJson($listarDadosArray);

            } 

        }

        if ($listarDadosArray) {

            return $response
            -> withStatus(200) 
            -> withHeader('Content-Type', 'application/json') 
            -> write($listarDadosJson);

        } else {

            return $response
            -> withStatus(204)
            -> withHeader('Content-Type', 'application/json')
            -> write('
                
                {
                    "message":"Não há dados para essa requisição"
                }
            
            '); 


        }

    });

    // EndPoint : GET, Retorna todos os jogos do BD cuja seu ID
    $app -> get('/jogos/{id}', function($request, $response, $args){

        require_once('constantes/constantes.php');
        require_once('controller/exibiDadosJogos.php');

        $id = $args['id'];

        if ($listarDados = exibirJogoPorId($id)) {

            if ($listarDadosArray = criarArrayId($listarDados)) {

                $listarDadosJson = criarJsonId($listarDadosArray);

            } 

        }

        if ($listarDadosArray) {

            return $response
            -> withStatus(200) 
            -> withHeader('Content-Type', 'application/json') 
            -> write($listarDadosJson);

        } else {

            return $response
            -> withStatus(204)
            -> withHeader('Content-Type', 'application/json')
            -> write('
                
                {
                    "message":"Não há dados para essa requisição"
                }
            
            '); 


        }

    });

    // Carrega todos os EndPoint para a execução
    $app -> run();

?>