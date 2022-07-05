<?php

    include_once('connect.php');

    $nome_usu = '';
    $cpf_usu = '';
    $rg_usu = '';
    $nasc_usu = '';
    $tel_usu = '';
    $email_usu = '';
    $confirm_email_usu = '';
    $senha_usu = '';
    $confirm_senha_usu = '';
    $cadastrar = '';
    
    if(!empty ($_POST['nome_usu'])){
        $nome_usu = $_POST['nome_usu'];
    }

    if(!empty ($_POST['cpf_usu'])){
        $cpf_usu = $_POST['cpf_usu'];
    }

    if(!empty ($_POST['rg_usu'])){
        $rg_usu = $_POST['rg_usu'];
    }

    if(!empty ($_POST['nasc_usu'])){
        $nasc_usu = $_POST['nasc_usu'];
    }
    
    if(!empty ($_POST['tel_usu'])){
        $tel_usu = $_POST['tel_usu'];
    }

    if(!empty ($_POST['email_usu'])){
        $email_usu = $_POST['email_usu'];
    }
    
    if(!empty ($_POST['senha_usu'])){
        $senha_usu = $_POST['senha_usu'];
    }
    
    if(!empty ($_POST['confirm_email_usu'])){
        $confirm_email_usu = $_POST['confirm_email_usu'];
    }

    if(!empty ($_POST['confirm_senha_usu'])){
        $confirm_senha_usu = $_POST['confirm_senha_usu'];
    }

    if(!empty ($_POST['confirm_cadastro'])){
        $cadastrar = $_POST['confirm_cadastro'];
    }

    if($cadastrar == "Confirmar Cadastro"){
        $res_insert = "INSERT INTO usuario(cpf_usuario, rg_usuario, nome_usuario, nascimento_usuario, telefone_usuario, email, senha) VALUES ('$cpf_usu', '$rg_usu', '$nome_usu', '$nasc_usu', '$tel_usu', '$email_usu', '$senha_usu')";
        $resposta_insert = mysqli_query($conn, $res_insert);
    }

    if($cadastrar2 == "Confirmar Cadastro"){
        $res_insert = "INSERT INTO `usuario`(`cpf_usuario`, `rg_usuario`, `nome_usuario`, `nascimento_usuario`, `telefone_usuario`, `email`, `senha`) VALUES ('$cpf_usu', '$rg_usu', '$nome_usu', '$nasc_usu', '$tel_usu', '$email_usu', '$senha_usu')";
        $resposta_insert = mysqli_query($conn, $res_insert);
    }

    header("Location: \mari\COMEBEAR\pagina2.html");
?>