<?php

include_once('connect.php');

//GET NOME_PEDIDO

$strhtml = '<div id="nome_pedido">
            <h3>Combo Feng Cheng</h3>
            <h5>2 djow salmão, 4 niguiri de salmão, 8 uramaki filadélfia, 8 hot filadélfia.</h5>
            </div>';

$doc = new DOMDocument();
$doc->loadHTML( $strhtml );
$xpath=new DOMXPath( $doc );
$col=$xpath->query('//div[@id="nome_pedido"]/h3');

if( $col ){
    /* You could store results from query in an array */
    $tags=array();
    foreach( $col as $node ) {

        /* Add tags to array - a rethink would be required if there are multiple h2 and h3 tags! */
        $tags[ $node->tagName ]=$node->nodeValue;

    }
}

$nome_pedido = $tags['h3'];

//GET GERAL

$nome = '';
$pedir = '';

if(!empty ($_POST['nome'])){
    $nome = $_POST['nome'];
}
if(!empty ($_POST['pedir'])){
    $pedir = $_POST['pedir'];
}

// GET CPF, ID ESTAB E PRECO

$sql1 = "SELECT * FROM usuario WHERE nome_usuario = '$nome'";
$result1 = mysqli_query($conn, $sql1);

if(mysqli_num_rows($result1) > 0){
    while($row1 = mysqli_fetch_assoc($result1)) {
        $cpf_usu = $row1["cpf_usuario"];
    }
}

$sql2 = "SELECT * FROM produto WHERE nome_produto = '$nome_produto'";
$result2 = mysqli_query($conn, $sql2);

if(mysqli_num_rows($result2) > 0){
    while($row2 = mysqli_fetch_assoc($result2)){
        $id_estab = $row2["id_estab"];
        $preco = $row2["preco"];
    }
}

if($pedir == "Fazer pedido"){
    $res_insert = "INSERT INTO `pedido` (`id_pedido`, `cpf_entreg`, `cpf_cliente`, `id_estab`, `dia_pedido`) VALUES (NULL, NULL, '$cpf_usu', '$id_estab', current_timestamp())";
    $resposta_insert = mysqli_query($conn, $res_insert);
}

?>