<?php

    include_once('connect.php');

    $email = '';
    $senha = '';
    $login = '';
    $confirm_email = '';
    $confirm_senha = '';

    if(!empty ($_POST['email'])){
        $email = $_POST['email'];
    }

    if(!empty ($_POST['senha'])){
        $senha = $_POST['senha'];
    }

    if(!empty ($_POST['login'])){
        $login = $_POST['login'];
    }

    $sql1 = "SELECT * FROM usuario WHERE email = '$email'";
    $result1 = mysqli_query($conn, $sql1);

    if(mysqli_num_rows($result1) > 0){
        while($row1 = mysqli_fetch_assoc($result1)) {
            $confirm_email = $row1["email"];
        }
    }

    $sql2 = "SELECT * FROM usuario WHERE email = '$email'";
    $result2 = mysqli_query($conn, $sql2);

    if(mysqli_num_rows($result2) > 0){
        while($row2 = mysqli_fetch_assoc($result2)){
            $confirm_senha = $row2["senha"];
        }
    }    

    if($senha == $confirm_senha and $email == $confirm_email){
        $conectado = 'sim';
        echo "<script type='javascript'> alert('Conectado com sucesso!'); </script>";
        echo "javascript:window.location='login.php';</script>";
    } else {
        $conectado = 'nao';
        echo "<script type='javascript'> alert('E-mail ou senha incorretos! Tente novamente.'); </script>";
        echo "javascript:window.location='login.php';</script>";
    }

    if($conectado == 'sim'){
        header("Location: \mari\COMEBEAR\pagina2.html");
    } else if($conectado == 'nao'){
        header("Location: \mari\COMEBEAR\pagina1_login.html");
    }
?>