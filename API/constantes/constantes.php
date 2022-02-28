<?php

    /*
        Objetivo: Arquivo de configurações de variáveis e constantes que serão utilizadas no sistema
        Data: 27/02/2022
        Autor: Kevin
    */
    
    # Local
    define ('SRC' , $_SERVER['DOCUMENT_ROOT'] . '/SmartGamesLtda/API/');

    // Variáveis para conexão com o BD
    const BD_SERVER = 'localhost';
    const BD_USER = 'root';
    const BD_PASSWORD = 'bcd127';
    const BD_DATABASE = 'SmartGames2022';

    // Mensagem do sistema
    const ERRO_CONEXAO_BD = 'Não foi possível realizar a conexão com o Banco De Dados.';

?>