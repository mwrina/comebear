<?php

    session_start();
    include_once('connect.php');

    $nome_fantasia = '';
    $cnpj = '';
    $tel_estab = '';
    $razao_social = '';
    $serv_entreg = '';
    $categoria = '';
    $estado = '';
    $cidade = '';
    $bairro = '';
    $endereco = '';
    $categoria = '';

    $cadastrar = '';


    if(!empty ($_POST['nome'])){
        $nome_fantasia = $_POST['nome'];
    }

    if(!empty ($_POST['cnpj'])){
        $cnpj = $_POST['cnpj'];
    }

    if(!empty ($_POST['tel'])){
        $tel_estab = $_POST['tel'];
    }

    if(!empty ($_POST['rs'])){
        $razao_social = $_POST['rs'];
    }

    if(!empty ($_POST['serv_entreg'])){
        $serv_entreg = $_POST['serv_entreg'];
    }

    if($serv_entreg == 'Sim'){
        $entrega = 1;
    } else {
        $entrega = 0;
    }

    if(!empty ($_POST['categoria'])){
        $categoria = $_POST['categoria'];
    }

    switch($categoria){
        case "Fast Food":
            $id_cat = 1;
        break;
        case "Bebidas":
            $id_cat = 2;
        break;
        case "Salada":
            $id_cat = 3;
        case "Sorvete":
            $id_cat = 4;
        break;
        case "Italiana":
            $id_cat = 5;
        break;
        case "Vegana":
            $id_cat = 6;
        break;
        case "Churrasco":
            $id_cat = 7;
        case "Farmácia":
            $id_cat = 8;
        break;
        case "Sobremesas":
            $id_cat = 9;
    }


    if(!empty ($_POST['estado'])){
        $estado = $_POST['estado'];
    }

    if(!empty ($_POST['cidade'])){
        $cidade = $_POST['cidade'];
    }

    if(!empty ($_POST['bairro'])){
        $bairro = $_POST['bairro'];
    }

    if(!empty ($_POST['endereco'])){
        $endereco = $_POST['endereco'];
    }

    if(!empty ($_POST['confirm_cadastro'])){
        $cadastrar = $_POST['confirm_cadastro'];
    }

    // echo($nome_fantasia . '<br/>');
    // echo($cnpj . '<br/>');
    // echo($tel_estab . '<br/>');
    // echo($razao_social . '<br/>');
    // echo($entrega . '<br/>');
    // echo($id_cat . '<br/>');
    // echo($estado . '<br/>');
    // echo($cidade . '<br/>');
    // echo($bairro . '<br/>');
    // echo($endereco . '<br/>');

    if($cadastrar == "Avançar"){
        $res_insert = "INSERT INTO `estabelecimentos`(`nome_fantasia`, `cpf_dono`, `cnpj`, `razao_social`, `id_categoria`, `tel_estab`, `entrega`, `estado`, `cidade`, `bairro`, `endereco`) VALUES ('$nome_fantasia', NULL, '$cnpj', '$razao_social', $id_cat, '$tel_estab', '$entrega', '$estado', '$cidade', '$bairro', '$endereco')";
        $resposta_insert = mysqli_query($conn, $res_insert);
    }

    $busca_id = "SELECT `id_estab` FROM `estabelecimentos` WHERE `cnpj` = '$cnpj'";
    $id = mysqli_query($conn, $busca_id);

    $_SESSION['id_estab'] = $id;

    header("Location: \mari\COMEBEAR\pagina1_cadastro_dono.html");

    // destroy_session();
?>