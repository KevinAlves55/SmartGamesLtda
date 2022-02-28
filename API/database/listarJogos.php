<?php

/*
    Objetivo: Listar todos os jogos
    Data: 27/02/2022
    Autor: Kevin
    
*/  

    require_once(SRC.'database/conexaoSql.php');

    function listarJogos() {

        $sql = "select idJogos, nome, imagem, round(preco, 2) as preco 
        from tblJogos order by rand()";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function listarJogoPorId($id) {

        $sql = "select tblJogos.idJogos, tblJogos.nome as NomeJogo, tblJogos.descricao, tblJogos.preco,
        tblPlataforma.nome as Plataformas, tblLojas.nome as Lojas
        
        from tblJogos inner join tblJogosPlataforma
                on tblJogos.idJogos = tblJogosPlataforma.idJogos
            inner join tblPlataforma
                on tblPlataforma.idPlataforma = tblJogosPlataforma.idPlataforma
            inner join tblJogosLojas
                on tblJogos.idJogos = tblJogosLojas.idJogos
            inner join tblLojas
                on tblLojas.idLojas = tblJogosLojas.idLojas
        where tblJogos.idJogos = $id";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

?>