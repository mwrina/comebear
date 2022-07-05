<?php

    include_once('connect.php');
    include('cadastro_estab.php');
    include('cadastro_dono.php');

    if($cadastrar2 == "Confirmar Cadastro"){
        $res_insert = "INSERT INTO `usuario`(`cpf_usuario`, `rg_usuario`, `nome_usuario`, `nascimento_usuario`, `telefone_usuario`, `email`, `senha`) VALUES ('$cpf_usu', '$rg_usu', '$nome_usu', '$nasc_usu', '$tel_usu', '$email_usu', '$senha_usu')";
        $resposta_insert = mysqli_query($conn, $res_insert);
    }

    if($cadastrar1 == "Avançar"){
        $res1_insert = "INSERT INTO `estabelecimentos`(`nome_fantasia`, `cpf_dono`, `cnpj`, `razao_social`, `id_categoria`, `tel_estab`, `entrega`, `estado`, `cidade`, `bairro`, `endereco`) VALUES ('$nome_fantasia', '$cpf_usu', '$cnpj', '$razao_social', $id_cat, '$tel_estab', '$entrega', '$estado', '$cidade', '$bairro', '$endereco')";
        $resposta1_insert = mysqli_query($conn, $res1_insert);
    }

    echo('$cpf_usu, $rg_usu, $nome_usu, $nasc_usu, $tel_usu, $email_usu, $senha_usu');
    echo('$nome_fantasia, $cpf_usu, $cnpj, $razao_social, $id_cat, $tel_estab, $entrega, $estado, $cidade, $bairro, $endereco');

?>