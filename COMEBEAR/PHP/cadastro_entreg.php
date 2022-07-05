<?php

    include_once('connect.php');

    $nome_entreg = '';
    $cpf_entreg = '';
    $rg_entreg = '';
    $nasc_entreg = '';
    $tel_entreg = '';
    $email_entreg = '';
    $confirm_email_entreg = '';
    $senha_entreg = '';
    $confirm_senha_entreg = '';
    $placa = '';
    $cadastrar = '';

    if(!empty ($_POST['nome_entreg'])){
        $nome_entreg = $_POST['nome_entreg'];
    }

    if(!empty ($_POST['cpf_entreg'])){
        $cpf_entreg = $_POST['cpf_entreg'];
    }

    if(!empty ($_POST['rg_entreg'])){
        $rg_entreg = $_POST['rg_entreg'];
    }

    if(!empty ($_POST['nasc_entreg'])){
        $nasc_entreg = $_POST['nasc_entreg'];
    }

    if(!empty ($_POST['tel_entreg'])){
        $tel_entreg = $_POST['tel_entreg'];
    }

    if(!empty ($_POST['email_entreg'])){
        $email_entreg = $_POST['email_entreg'];
    }

    if(!empty ($_POST['senha_entreg'])){
        $senha_entreg = $_POST['senha_entreg'];
    }

    if(!empty ($_POST['placa'])){
        $placa = $_POST['placa'];
    }

    if(!empty ($_POST['confirm_cadastro'])){
        $cadastrar = $_POST['confirm_cadastro'];
    }

    if($cadastrar == "Confirmar Cadastro"){
        $res_insert = "INSERT INTO `entregador`(`cpf_entreg`, `rg_entreg`, `nome_entreg`, `nascimento_entreg`, `telefone_entreg`, `email`, `senha`, `cnh`, `foto_rosto`, `placa`) VALUES ('$cpf_entreg', '$rg_entreg', '$nome_entreg', '$nasc_entreg', '$tel_entreg', '$email_entreg', '$senha_entreg', NULL, NULL, '$placa')";
        $resposta_insert = mysqli_query($conn, $res_insert);
    }

    header("Location: \mari\COMEBEAR - HTML, CSS + IMGS\pagina2.html");
?>